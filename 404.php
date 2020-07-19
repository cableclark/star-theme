<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Miss Albini
 */
get_header();?>
<main id="primary" class="site-main site-container">
	<div class="no-results-container">
		<?php 
		esc_html_e( 'We tried, but we did not find that page...', 'Miss Albini' ); 
		;?>
	</div>	
</main><!-- #main -->
<?php
get_sidebar();
get_sidebar( 'singlebar' );
get_footer();
