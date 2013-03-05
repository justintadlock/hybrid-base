<li id="comment-<?php comment_ID(); ?>" class="<?php hybrid_comment_class(); ?>">

	<?php echo hybrid_avatar(); ?>

	<?php echo apply_atomic_shortcode( 'comment_meta', '<div class="comment-meta">[comment-author] [comment-published] [comment-permalink before="| "] [comment-edit-link before="| "]</div>' ); ?>

	<div class="comment-content">
		<?php comment_text(); ?>
	</div><!-- .comment-content -->

	<?php echo hybrid_comment_reply_link_shortcode( array() ); ?>

<?php /* No closing </li> is needed.  WordPress will know where to add it. */ ?>