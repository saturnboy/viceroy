<?php
/*
Template Name: Gallery N-column

This template depends on two Custom Fields:
  "gallery_tag" is used to build the gallery.
  "numcols" is used to set the number of columns [2,3,4].
*/

if (is_page()) {
    $tag = get_post_meta($posts[0]->ID, 'gallery_tag', true);
    $numcols = get_post_meta($posts[0]->ID, 'numcols', true);
}

if (!$numcols) { $numcols = 2; }

$galleryN = 'gallery' . $numcols;

if ($numcols == 4) {
    $gallerySpan = 'span-4';
} else if ($numcols == 3) {
    $gallerySpan = 'span-5';
} else {
    $gallerySpan = 'span-8';
}

?>
<?php get_header(); ?>

<div id="content-<?php print $galleryN; ?>" class="span-16 last">

<?php
if ($tag) {
    $myposts = get_posts('numberposts=-1&orderby=date&order=DESC&tag=' . $tag);
} else {
    $myposts = get_posts('numberposts=-1&orderby=date&order=DESC');
}

    $idx = 0;
    foreach($myposts as $post):
        setup_postdata($post);
	$idx++;
?>

<div id="post-<?php the_ID(); ?>" class="post<?php print " $gallerySpan gallery $galleryN" . ($idx <= $numcols ? ' firstpost' : '') . ($idx % $numcols == 0 ? ' last' : ''); ?>">

<div class="ptitle">
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
</div><!-- /ptitle -->

<div class="pdate">
<?php the_time('F j, Y'); ?>
</div><!-- /pdate -->

<div class="pbody">
<?php the_excerpt('Read more...'); ?>
</div><!-- /pbody -->

</div><!-- /post -->

<?php endforeach; ?>

</div><!-- /content-<?php print $galleryN; ?> -->

<?php get_footer(); ?>
