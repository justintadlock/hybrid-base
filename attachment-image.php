<?php get_header(); // Loads the header.php template. ?>

	<div id="content" class="hfeed">

		<?php if ( have_posts() ) { ?>

			<?php while ( have_posts() ) { ?>

				<?php the_post(); // Loads the post data. ?>

				<article id="post-<?php the_ID(); ?>" class="<?php hybrid_entry_class(); ?>">

					<header class="entry-header">
						<h1 class="entry-title"><?php single_post_title(); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">

						<?php if ( has_excerpt() ) {
							$src = wp_get_attachment_image_src( get_the_ID(), 'full' );
							echo do_shortcode( sprintf( '[caption align="aligncenter" width="%1$s"]%3$s %2$s[/caption]', esc_attr( $src[1] ), get_the_excerpt(), wp_get_attachment_image( get_the_ID(), 'full', false ) ) );
						} else {
							echo wp_get_attachment_image( get_the_ID(), 'full', false, array( 'class' => 'aligncenter' ) );
						} ?>

						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<p class="page-links">' . __( 'Pages:', 'hybrid-base' ), 'after' => '</p>' ) ); ?>

					</div><!-- .entry-content -->

				</article><!-- .hentry -->

				<div class="attachment-meta">

					<?php $gallery = gallery_shortcode( array( 'columns' => 4, 'numberposts' => 8, 'id' => $post->post_parent, 'exclude' => get_the_ID() ) ); ?>

					<?php if ( !empty( $gallery ) ) { ?>
						<div class="image-gallery">
							<h3><?php _e( 'Gallery', 'hybrid-base' ); ?></h3>
							<?php echo $gallery; ?>
						</div>
					<?php } ?>

				</div><!-- .attachment-meta -->

				<?php comments_template(); // Loads the comments.php template. ?>

			<?php } // End while loop. ?>

		<?php } // End if check. ?>

	</div><!-- #content -->

<?php get_footer(); // Loads the footer.php template. ?>