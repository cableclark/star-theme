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
			<h1><?php echo single_tag_title();?></h1>
		</div>
		<div class="archives-container">
		<?php
		global $query_string;
		query_posts( $query_string . '&posts_per_page=10' );

		if ( have_posts() ) :
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/excerpt-archive', get_post_type() );
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