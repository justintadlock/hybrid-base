<header <?php hybrid_attr( 'archive-header' ); ?>>

	<h1 <?php hybrid_attr( 'archive-title' ); ?>><?php the_archive_title(); ?></h1>

	<?php if ( ! is_paged() && $desc = get_the_archive_description() ) : // Check if we're on page/1. ?>

		<div <?php hybrid_attr( 'archive-description' ); ?>>
			<?php echo $desc; ?>
		</div><!-- .archive-description -->

	<?php endif; // End paged check. ?>

</header><!-- .archive-header -->