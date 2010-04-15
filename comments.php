<?php
// Do not delete these lines
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
	die ('Please do not load this page directly. Thanks!');

if ( post_password_required() ) { ?>
<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
<?php
	return;
}
?>

<!-- You can start editing here. -->

<?php if ( have_comments() ) : ?>

<div id="commentsbar" class="post span-16 last">
  <h3 id="comments">Comments</h3><a name="comments"></a>

  <?php /*<ol class="commentlist">
    <?php wp_list_comments(); ?>
  </ol> */ ?>

  <div id="commentlist" class="span-16 last">
    <?php $comment_idx = 0; ?>
    <?php foreach ($comments as $comment): ?>
      <div id="comment-<?php comment_ID(); ?>" <?php comment_class('span-16 last ' . ($comment_idx == 0 ? ' firstcomment' : '')); ?>>

<div class="comment-idx span-1"><?php print ($comment_idx + 1); ?></div>

<div class="span-15 last">

<div class="comment-author span-11"><p><?php comment_author_link(); ?></p></div>

<div class="comment-date span-4 last"><?php comment_date('n.j.Y'); ?></div>

<div class="comment-body span-15 last">
<?php if ($comment->comment_approved == '0') { print '<p><i>Your comment is awaiting moderation.</i></p>'; } ?>
<?php comment_text(); ?>
<?php edit_comment_link('EDIT &raquo;', '<p>', '</p>'); ?>
</div>

</div>

      </div><!-- /comment-<?php comment_ID(); ?> -->
    <?php $comment_idx++; ?>
    <?php endforeach; ?>
  </div>

  <div class="navigation">
    <div class="alignleft"><?php previous_comments_link() ?></div>
    <div class="alignright"><?php next_comments_link() ?></div>
  </div>
</div>

<?php else: ?>

  <?php if ( comments_open() ) : ?>
    <!-- Comments are open, but there are no comments. -->
  <?php else : // comments are closed ?>
    <div id="commentsbar" class="class="post span-16 last"><p>Comments are closed.</p></div>
  <?php endif; ?>

<?php endif; ?>


<?php if ( comments_open() ) : ?>

<div id="respond" class="post span-16 last">

<h3><?php comment_form_title( 'Leave a Comment', 'Leave a Comment to %s' ); ?></h3>

<div class="cancel-comment-reply">
	<small><?php cancel_comment_reply_link(); ?></small>
</div>

<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
<p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
<fieldset>

<?php if ( is_user_logged_in() ) : ?>

<p>Logged in as <b><?php echo $user_identity; ?></b>.&nbsp;&nbsp;<a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Logout">Logout &raquo;</a></p>

<?php else : ?>

<p>
<label for="author">Name</label><?php if ($req) { print '&nbsp;&nbsp;<span class="small">(required)</span>'; } ?><br />
<input class="text" type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="30" tabindex="1" />
</p>

<p>
<label for="email">Email</label><?php if ($req) { print '&nbsp;&nbsp;<span class="small">(required)</span>'; } ?><br />
<input class="text" type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="30" tabindex="2" />
</p>

<p>
<label for="url">Website</label><br />
<input class="text" type="text" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" size="30" tabindex="3" />
</p>

<?php endif; ?>

<p>
<label for="comment">Comment</label><br />
<textarea name="comment" id="comment" cols="60" rows="3" tabindex="4"></textarea>
</p>

<p>
<input name="submit" type="submit" id="submit" tabindex="5" value="SUBMIT" />
<?php comment_id_fields(); ?>
</p>
<?php do_action('comment_form', $post->ID); ?>
</fieldset>
</form>

<?php endif; // If registration required and not logged in ?>
</div>

<?php endif; // if you delete this the sky will fall on your head ?>
