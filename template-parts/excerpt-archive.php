<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Miss Albini
 */

?>
<div id="app" class="card margin-2">
	<article id="post-<?php the_ID(); ?>">
		<header class="entry-header">
			<?php 
			miss_albini_post_thumbnail('medium'); 
			miss_albini_entry_footer(); 
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title archive-h2">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title archive-h2"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;
			?>
			<div class="entry-meta">
				<?php miss_albini_posted_on();?>
			</div><!-- .entry-meta -->
		</header><!-- .entry-header -->
		<div class="entry-content">
			<?php
			the_excerpt(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'miss_albini' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			);

			?>
		</div><!-- .entry-content -->
		<footer class="entry-footer">
			<?php if ( 'post' === get_post_type() ) :
			 endif; ?>
		</footer><!-- .entry-footer -->
	</article><!-- #post-<?php the_ID(); ?> -->
</div> <!-- Container ends -->
