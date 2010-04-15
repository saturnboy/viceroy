<?php get_header(); ?>

<div id="content" class="span-16 last">

<div class="post span-16 last firstpost">
<div class="ptitle span-16 last">
<h2 style="color:#110;"><?php printf( __( 'Searching for: &quot;%s&quot;' ), '<span>' . esc_html( get_search_query() ) . '</span>'); ?></h2>
</div>
</div>

<?php if (have_posts()) : ?>
<?php while(have_posts()): the_post(); ?>
<div id="post-<?php the_ID(); ?>" class="post span-16 last">

<div class="ptitle span-16 last">
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
</div><!-- /ptitle -->

<div class="pbody span-16 last">
<?php the_excerpt('Read more...'); ?>
<?php edit_post_link('EDIT &raquo;', '<p>', '</p>'); ?>
</div><!-- /pbody -->

</div><!-- /post -->

<?php endwhile; ?>
<?php else: ?>
<p class="failed-search">Sorry, no posts found.</p>
<?php endif; ?>

</div><!-- /content -->

<?php get_footer(); ?>
