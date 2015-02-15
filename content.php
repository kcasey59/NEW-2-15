<?php
/**
 * @package Casey\'s Berries
 */
?>

<img src="http://localhost:8888/wp-content/themes/CaseysBerries/images/berries.jpg">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php caseys_berries_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_post_thumbnail?>
		
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'caseys-berries' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php caseys_berries_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->