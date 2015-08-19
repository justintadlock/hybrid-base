<?php if ( is_singular( 'post' ) ) : // If viewing a single post page. ?>

	<div class="loop-nav">
		<?php previous_post_link( '<div class="prev">' . esc_html__( 'Previous Post: %link', 'hybrid-base' ) . '</div>', '%title' ); ?>
		<?php next_post_link(     '<div class="next">' . esc_html__( 'Next Post: %link',     'hybrid-base' ) . '</div>', '%title' ); ?>
	</div><!-- .loop-nav -->

<?php elseif ( is_home() || is_archive() || is_search() ) : // If viewing the blog, an archive, or search results. ?>

	<?php the_posts_pagination(
		array( 
			'prev_text' => esc_html_x( '&larr; Previous', 'posts navigation', 'hybrid-base' ), 
			'next_text' => esc_html_x( 'Next &rarr;',     'posts navigation', 'hybrid-base' )
		) 
	); ?>

<?php endif; // End check for type of page being viewed. ?>