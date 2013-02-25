<?php get_header(); // Loads the header.php template. ?>

	<div id="content">

		<div class="hfeed">

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" class="<?php hybrid_entry_class(); ?>">

						<header class="entry-header">
							<?php echo apply_atomic_shortcode( 'entry_title', the_title( '<h1 class="entry-title">', '</h1>', false ) ); ?>
							<?php echo apply_atomic_shortcode( 'entry_byline', '<div class="entry-byline">' . sprintf( __( 'Sizes: %s', 'hybrid-base' ), chun_get_image_size_links() ) . '</div>' ); ?>
						</header><!-- .entry-header -->

						<div class="entry-content">

							<?php if ( has_excerpt() ) {
								$src = wp_get_attachment_image_src( get_the_ID(), 'full' );
								echo do_shortcode( sprintf( '[caption align="aligncenter" width="%1$s"]%3$s %2$s[/caption]', esc_attr( $src[1] ), get_the_excerpt(), wp_get_attachment_image( get_the_ID(), 'full', false ) ) );
							} else {
								echo wp_get_attachment_image( get_the_ID(), 'full', false, array( 'class' => 'aligncenter' ) );
							} ?>

							<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'hybrid-base' ) ); ?>
							<?php wp_link_pages( array( 'before' => '<p class="page-links">' . __( 'Pages:', 'hybrid-base' ), 'after' => '</p>' ) ); ?>

						</div><!-- .entry-content -->

					</article><!-- .hentry -->

					<div class="attachment-meta">

						<?php chun_image_info(); ?>

						<?php $gallery = gallery_shortcode( array( 'columns' => 4, 'numberposts' => 8, 'id' => $post->post_parent, 'exclude' => get_the_ID() ) ); ?>

						<?php if ( !empty( $gallery ) ) { ?>
							<div class="image-gallery">
								<h3><?php _e( 'Gallery', 'hybrid-base' ); ?></h3>
								<?php echo $gallery; ?>
							</div>
						<?php } ?>

					</div><!-- .attachment-meta -->

					<?php comments_template(); // Loads the comments.php template. ?>

				<?php endwhile; ?>

			<?php endif; ?>

		</div><!-- .hfeed -->

	</div><!-- #content -->

<?php get_footer(); // Loads the footer.php template. ?>