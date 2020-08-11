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
					<?php
					if (get_locale() == "en_GB") {
						get_template_part( 'template-parts/footer', "EN" );
						} else {
							get_template_part( 'template-parts/footer', "MK" );
						}
					?>			
			</footer><!-- #colophon -->
		</div><!-- #page -->
	<?php wp_footer(); ?>
	</body>
</html>
