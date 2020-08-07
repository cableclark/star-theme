<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Star Star
 */
?>
<article id="excerpt-<?php the_ID(); ?>" class="excerpt card">
	<?php star_star_post_thumbnail('large'); ?>
	<div class="excerpt-text">
		<header class="excerpt-header">
		<?php
			star_star_entry_footer(); 
			the_title( '<h2 class="excerpt-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		?>
			<div class="excerpt-meta"><?php star_star_posted_on();?></div>
		</header>
		<div class="excerpt-content">
			<?php
			the_excerpt(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'Star-Star' ),
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
		<a href="<?php esc_url( the_permalink()) ?>" class="read-more"> ПОВЕЌЕ...</a>
		</div>
	</div>	
</article> 
