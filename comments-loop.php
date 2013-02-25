<?php if ( have_comments() ) { ?>

	<h2 id="comments-number"><?php comments_number( '', __( 'One Response', 'hybrid-base' ), __( '% Responses', 'hybrid-base' ) ); ?></h2>

	<?php get_template_part( 'comments-loop-nav' ); // Loads the comment-loop-nav.php template. ?>

	<ol class="comment-list">
		<?php wp_list_comments( hybrid_list_comments_args() ); ?>
	</ol><!-- .comment-list -->

<?php } // End check for comments. ?>

<?php get_template_part( 'comments-loop-error' ); // Loads the comments-loop-error.php template. ?>