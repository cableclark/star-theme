<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Miss Albini
 */
?>
<article id="article-<?php the_ID(); ?>" class="news-card stagered animatable is-visible">
	<a class="light-color" href="<?php the_permalink();?>" rel="bookmark"><?php the_post_thumbnail('large'); ?>
	 </a>
	<div class="news-card__text flexed-column flexed-align-bottom-fix">
		<header class="news-card__header light-color">
			<?php
				the_title( '<h3 class="news-card-title light-color"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
			?>
			<div class="news-card-meta light-color"><?php star_star_posted_on();?></div>
		</header>
		<div class="news-card-content light-color">
			<?php
			the_excerpt(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'Miss Albini' ),
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
		<a href="<?php the_permalink() ?>" class="red_link--more flex-end hide-on-small-screen">ПОВЕЌЕ...</a>
	</div>	
</article>

