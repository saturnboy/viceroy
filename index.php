<?php get_header(); ?>

<div id="content" class="span-16 last">

<?php if (have_posts()) : ?>
<?php $post_idx = 0; ?>
<?php while(have_posts()): the_post(); ?>
<div id="post-<?php the_ID(); ?>" <?php post_class('span-16 last' . ($post_idx == 0 ? ' firstpost' : '')) ; ?>>

<div class="ptitle span-12">
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
</div><!-- /ptitle -->

<div class="pdate span-4 last">
<?php the_time('F j, Y'); ?>
</div><!-- /pdate -->

<div class="pbody span-16 last">
<?php the_content('Read more...'); ?>
<?php edit_post_link('EDIT &raquo;', '<p>', '</p>'); ?>
</div><!-- /pbody -->

<div class="pcomment span-3">
<?php comments_popup_link('no comments', '1 comment', '% comments'); ?>
</div><!-- /pcomment -->

<div class="ptag span-13 last">
<?php the_category(', ') ?><?php the_tags(' | ', ', ', ''); ?>
</div><!-- /ptag -->

</div><!-- /post -->

<?php $post_idx++; ?>
<?php endwhile; ?>
<?php else: ?>
<p>Sorry, no posts found.</p>
<?php endif; ?>

</div><!-- /content -->

<?php get_footer(); ?>
