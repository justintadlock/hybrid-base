<article id="post-<?php the_ID(); ?>" class="<?php hybrid_entry_class(); ?>">

	<?php if ( is_singular( get_post_type() ) ) { ?>

		<header class="entry-header">
			<h1 class="entry-title"><?php single_post_title(); ?></h1>
			<?php echo apply_atomic_shortcode( 'entry_byline', '<div class="entry-byline">' . __( '[post-format-link] file published on [entry-published] [entry-comments-link before=" | "] [entry-edit-link before="| "]', 'hybrid-base' ) . '</div>' ); ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php the_content(); ?>
			<?php wp_link_pages( array( 'before' => '<p class="page-links">' . '<span class="before">' . __( 'Pages:', 'hybrid-base' ) . '</span>', 'after' => '</p>' ) ); ?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php echo apply_atomic_shortcode( 'entry_meta', '<div class="entry-meta">' . __( '[entry-terms taxonomy="category" before="Posted in "] [entry-terms before="Tagged "]', 'hybrid-base' ) . '</div>' ); ?>
		</footer><!-- .entry-footer -->

	<?php } else { ?>

		<header class="entry-header">
			<?php the_title( '<h2 class="entry-title"><a href="' . get_permalink() . '">', '</a></h2>' ); ?>
		</header><!-- .entry-header -->

		<?php if ( has_excerpt() ) { ?>

			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->

		<?php } else { ?>

			<div class="entry-content">
				<?php the_content( __( 'Read more &rarr;', 'hybrid-base' ) ); ?>
				<?php wp_link_pages( array( 'before' => '<p class="page-links">' . '<span class="before">' . __( 'Pages:', 'hybrid-base' ) . '</span>', 'after' => '</p>' ) ); ?>
			</div><!-- .entry-content -->

		<?php } ?>

		<footer class="entry-footer">
			<?php echo apply_atomic_shortcode( 'entry_meta', '<div class="entry-meta">' . __( '[post-format-link] file published on [entry-published] [entry-comments-link before="| "] [entry-edit-link before="| "]', 'hybrid-base' ) . '</div>' ); ?>
		</footer>

	<?php } ?>

</article><!-- .hentry -->