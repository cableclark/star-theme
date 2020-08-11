<?php
/**
 * Template part for displaying single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Star Star
 */

?>
<div id="app">
	<article id="post-<?php the_ID(); ?>" class="single-article flexed-publication">
		<header>
		<?php
			if ( is_singular() ) :
				the_title( '<h1 class="single__title">', '</h1>' );
			else :
				the_title( '<h2><a href="' . esc_url( get_permalink() ) . '" rel="bookmark" class="single__title">', '</a></h2>' );
			endif;
			?>	
		<div class="thumb-container"><?php the_post_thumbnail();?></div>	

			
		</header><!-- .entry-header -->
		<div class="entry-content">
		
			<?php
			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading...<span class="screen-reader-text"> "%s"</span>', 'star' ),
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
			<?php 
			star_get_tags(); 
			?>
		</div><!-- .entry-content -->
	</article><!-- #post-<?php the_ID(); ?> -->
</div> <!-- Container ends -->
