<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Star Star
 */

get_header();
?>
	<main id="primary" class="site-main white-bg">
		<div class="site-container">
			<?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', 'single' );
				?>
			<?php	
			endwhile; // End of the loop.
			?>
		</div>	
	</main><!-- #main -->
<?php
get_sidebar();
get_sidebar( 'similar' );
get_footer();
