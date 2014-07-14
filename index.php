<?php get_header(); // Loads the header.php template. ?>

	<div id="content" class="hfeed">

		<?php get_template_part( 'loop-meta' ); // Loads the loop-meta.php template. ?>

		<?php if ( have_posts() ) { ?>

			<?php while ( have_posts() ) { ?>

				<?php the_post(); // Loads the post data. ?>

				<?php hybrid_get_content_template(); // Loads the content template. ?>

				<?php if ( is_singular() ) { ?>

					<?php comments_template(); // Loads the comments.php template. ?>

				<?php } // End if check. ?>

			<?php } // End while loop. ?>

		<?php } else { ?>

			<?php get_template_part( 'loop-error' ); // Loads the loop-error.php template. ?>

		<?php } // End if check. ?>

		<?php get_template_part( 'loop-nav' ); // Loads the loop-nav.php template. ?>

	</div><!-- #content -->

<?php get_footer(); // Loads the footer.php template. ?>