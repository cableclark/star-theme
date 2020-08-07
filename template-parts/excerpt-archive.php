<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Star star
 */ 

?>
	<article id="post-<?php the_ID(); ?>" class="archive-card margin-2 stagered animatable">
		<header>
			<div class="archive-image-wrapper">
				<?php the_post_thumbnail('large_medium'); ?>
			</div> 
		</header>
		<div class="flexed-column ">
		<?php
			the_title( '<h2 class="archive-article-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		?>
			<div class="margined">
				<?php star_star_posted_on();?>
			</div>
			<?php
			the_excerpt(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'star_star' ),
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
			<a href="<?php the_permalink() ?>" class="red_link--more flex-end hide-on-small-screen">ПОВЕЌЕ... </a>
		</div>	
		
	</article><!-- #post-<?php the_ID(); ?> -->
