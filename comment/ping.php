<li <?php hybrid_attr( 'comment' ); ?>>

	<header class="comment-meta">
		<cite <?php hybrid_attr( 'comment-author' ); ?>><?php comment_author_link(); ?></cite><br />
		<time <?php hybrid_attr( 'comment-published' ); ?>><?php printf( esc_html__( '%s ago', 'hybrid-base' ), human_time_diff( get_comment_time( 'U' ), current_time( 'timestamp' ) ) ); ?></time>
		<a <?php hybrid_attr( 'comment-permalink' ); ?>><?php esc_html_e( 'Permalink', 'hybrid-base' ); ?></a>
		<?php edit_comment_link(); ?>
	</header><!-- .comment-meta -->

<?php // No closing </li> is needed.  WordPress will know where to add it. ?>