<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Miss Albini
 */

get_header();
?><div class="thumb-container"><?php the_post_thumbnail();?></div>	
	<main id="primary" class="site-main white-bg ">
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
