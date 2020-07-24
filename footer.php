<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package star-star
 */
?>
	<footer id="colophon" class="site-footer">
		
			<div class="footer-logo-container">
				<img class="footer-logo" src="<?php echo get_template_directory_uri() . '/images/Footer_logo_MK.svg' ?>">
			</div>
			<div class="footer-text-container">
				<p class="footer-text-container__paragraph"><b>СТАР-СТАР </b> </p>
				<p class="footer-text-container__paragraph"><b>Телефон/Факс:</b> +389 (2) 32 32 411 </p>
				<p class="footer-text-container__paragraph"><b>Електронска пошта: </b>star.contact@yahoo.com </p>
				<img class="footer-icon" src="<?php echo get_template_directory_uri() . '/images/facebook.svg' ?>">
				<img class="footer-icon" src="<?php echo get_template_directory_uri() . '/images/twitter.svg' ?>">
				<img class="footer-icon" src="<?php echo get_template_directory_uri() . '/images/youtube.svg' ?>">
				<img class="footer-icon" src="<?php echo get_template_directory_uri() . '/images/flickr.svg' ?>">
			</div>	

	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
