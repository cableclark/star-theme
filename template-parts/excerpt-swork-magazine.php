<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Star Star 
 */
?>
<article id="article-<?php the_ID(); ?>" class="publication-card stagered animatable">
	<a href="<?php the_permalink();?>" class="publication-image-container" rel="bookmark"><?php the_post_thumbnail('large'); ?>
	</a>
	<div class="publication-card__text">
		<header class="publication-card__header">
		<?php
			the_title( '<h3 class="publication-card-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );	
		?>
		</header>
		<div class="publication-card-content hide-on-small-screen">
			<?php
			the_excerpt(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'Star Star' ),
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
	<a href="<?php the_permalink() ?>" class="flex-end hide-on-small-screen"><button class="red_link--more">ПОВЕЌЕ...</button> </a>
	</div>	
</article>

