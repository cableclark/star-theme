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
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'star' ),
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
			<a href="<?php esc_url( the_permalink()) ?>" class="flex-end mt-1">
				<svg
				class="arrow"
				width="26.999975"
				height="14.72795"
				viewBox="0 0 26.999975 14.72795"
				fill="none"
				>
				<path
					d="m 26.7071,8.071075 c 0.3905,-0.3905 0.3905,-1.0237 0,-1.4142 l -6.364,-6.364 c -0.3905,-0.3905 -1.0236,-0.3905 -1.4142,0 -0.3905,0.3906 -0.3905,1.0237 0,1.4142 l 5.6569,5.6569 -5.6569,5.6569 c -0.3905,0.3905 -0.3905,1.0236 0,1.4142 0.3906,0.3905 1.0237,0.3905 1.4142,0 z M 0,8.363975 h 26 v -2 H 0 Z"
					fill="#ee3626"
					id="path2" />
				</svg>
			</a>
		</div>
	</div>	
</article> 

esc_html_e( 'Барајте повторно...', 'star' )
