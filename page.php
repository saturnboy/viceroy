<?php get_header(); ?>

<div id="content" class="span-16 last">

<?php if (have_posts()) : ?>
<?php while(have_posts()): the_post(); ?>

<div id="page-<?php the_ID(); ?>" class="post span-16 last firstpost">

<div class="ptitle span-16 last">
<h2><?php the_title(); ?></h2>
</div><!-- /ptitle -->

<div class="pbody span-16 last">
<?php the_content('Read more...'); ?>
<?php edit_post_link('EDIT &raquo;', '<p>', '</p>'); ?>
</div><!-- /pbody -->

</div><!-- /post -->

<?php endwhile; ?>
<?php else: ?>
<p>Sorry, no posts found.</p>
<?php endif; ?>

</div><!-- /content -->

<?php get_footer(); ?>
