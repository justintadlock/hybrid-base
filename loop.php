<?php if ( have_posts() ) { ?>

	<?php while ( have_posts() ) { ?>

		<?php the_post(); // Loads the post data. ?>

		<?php
		      /* Update when Hybrid Core 1.6 is released. This function will no longer be available. */
		      hybrid_base_get_content_template(); // Loads the content template. 
		?>

		<?php if ( is_singular() ) { ?>

			<?php comments_template(); // Loads the comments.php template. ?>

		<?php } // End if check. ?>

	<?php } // End while loop. ?>

<?php } else { ?>

	<?php get_template_part( 'loop-error' ); // Loads the loop-error.php template. ?>

<?php } // End if check. ?>