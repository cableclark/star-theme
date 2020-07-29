<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Star star
 */

?>
<div id="app" class="archive-card margin-2">
	<article id="post-<?php the_ID(); ?>">
		<header>
			<div class="archive-image-wrapper">
				<?php the_post_thumbnail('medium'); ?>
			</div> 
	        <?php
			if ( is_singular() ) :
				the_title( '<h1 class="">', '</h1>' );
			else :
				the_title( '<h2 class=""><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;
			?>
			<div>
				<?php miss_albini_posted_on();?>
			</div>
		</header>
		<div >
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
		</div>	
	</article><!-- #post-<?php the_ID(); ?> -->
</div> 
