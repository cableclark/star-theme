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
						<img class="footer-logo" src="<?php echo get_template_directory_uri() . '/images/footer_logo.png' ?>">
					</div>
					<div class="footer-text-container">
						<p class="footer-text-container__paragraph"><b>СТАР-СТАР </b> </p>
						<p class="footer-text-container__paragraph"><b>Телефон/Факс:</b> +389 (2) 32 32 411 </p>
						<p class="footer-text-container__paragraph"><b>Електронска пошта: </b>star.contact@yahoo.com </p>
						<a  href="https://www.facebook.com/starsexwork" title="Our Facebook page" target="_blank"> <img class="footer-icon" src="<?php echo get_template_directory_uri() . '/images/facebook.svg' ?>"> </a>
						<a  href="https://www.youtube.com/channel/UCRdfXnE0cdjt_JI0JCHnOiw" title="Our Youtube channel" target="_blank">
						<img class="footer-icon" src="<?php echo get_template_directory_uri() . '/images/youtube.svg' ?>"> </a>
						<a  href="https://twitter.com/STARsexwork/" title="Our Twittter account" target="_blank"><img class="footer-icon" src="<?php echo get_template_directory_uri() . '/images/twitter.svg' ?>"></a>
						<a  href="https://www.flickr.com/photos/starsexwork/" title="Our Flickr account" target="_blank"><img class="footer-icon" src="<?php echo get_template_directory_uri() . '/images/flickr.svg' ?>"> </a>
						
					</div>	
			</footer><!-- #colophon -->
		</div><!-- #page -->
	<?php wp_footer(); ?>
	</body>
</html>
