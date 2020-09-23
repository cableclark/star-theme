<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Star Star
 */
get_header();
?>
	<main id="primary" class="site-main margin-top">
		<div class="archive-title">
			<h1 class="sexwork__title"><?php echo get_cat_name(get_queried_object_id());?></h1>
		</div>
		<div class="swork-container">
		<?php
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/excerpt-swork-magazine', get_post_type() );
			endwhile;			
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif;
		?>
	</div>	
	<?php the_posts_pagination( array(
				'mid_size'  => 1,
				'prev_text' => __( '<', 'textdomain' ),
				'next_text' => __( '>', 'textdomain' ),
			) );
	?>
	</main><!-- #main -->
<?php
get_sidebar();
get_footer();
?>