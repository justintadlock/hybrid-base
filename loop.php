<?php if ( have_posts() ) { ?>

	<?php while ( have_posts() ) { ?>

		<?php the_post(); // Loads the post data. ?>

		<?php get_template_part( 'content', ( post_type_supports( get_post_type(), 'post-formats' ) ? get_post_format() : get_post_type() ) ); ?>

		<?php if ( is_singular() ) { ?>

			<?php comments_template(); // Loads the comments.php template. ?>

		<?php } // End if check. ?>

	<?php } // End while loop. ?>

<?php } else { ?>

	<?php get_template_part( 'loop-error' ); // Loads the loop-error.php template. ?>

<?php } // End if check. ?>