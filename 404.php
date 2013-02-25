<?php @header( 'HTTP/1.1 404 Not found', true, 404 );

get_header(); // Loads the header.php template. ?>

	<div id="content">

		<div class="hfeed">

			<article id="post-0" class="<?php hybrid_entry_class(); ?>">

				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Whoah! You broke something!', 'hybrid-base' ); ?></h1>
				</header><!-- .entry-header -->

				<div class="entry-content">

					<p>
						<?php printf( __( "Just kidding! You tried going to %s, which doesn't exist, so that means I probably broke something.", 'hybrid-base' ), '<code>' . home_url( esc_url( $_SERVER['REQUEST_URI'] ) ) . '</code>' ); ?>
					</p>
					<p>
						<?php _e( "The following is a list of the latest posts from the blog. Maybe it will help you find what you're looking for.", 'hybrid-base' ); ?>
					</p>

					<ul>
						<?php wp_get_archives( array( 'limit' => 20, 'type' => 'postbypost' ) ); ?>
					</ul>

				</div><!-- .entry-content -->

			</article><!-- .hentry -->

		</div><!-- .hfeed -->

	</div><!-- #content -->

<?php get_footer(); // Loads the footer.php template. ?>