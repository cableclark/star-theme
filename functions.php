<?php
/**
 * Star star functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Star Star
 */

/**
 * Load setup.
 */
require get_template_directory() . '/inc/setup.php';

/**
 * Load widgets.
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Load scripts.
 */
require get_template_directory() . '/inc/scripts.php';

/**
 * Load  filters.
 */
require get_template_directory() . '/inc/filters.php';


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/** 
* Filter except length to 35 words.
*/
  
function tn_custom_excerpt_length( $length ) {
		return 35;
	}

add_filter( 'excerpt_length', 'tn_custom_excerpt_length', 999 );



/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';



require get_template_directory() . '/inc/shortcodes.php';



