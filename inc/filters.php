<?php 

/**
 * Clean menus from classes
 */

function clear_nav_menu_item_id($id, $item, $args) {
	   return "";
   }
add_filter('nav_menu_item_id', 'clear_nav_menu_item_id', 10, 3);   
  
   
function clear_nav_menu_item_class($classes, $item, $args) {
	return array();
    }
    
add_filter('nav_menu_css_class', 'clear_nav_menu_item_class', 10, 3);



/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
    return '...';
}

add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );


/**
 * Change the label of the search button
 */

function wpforo_search_form( $html ) {

	$html = str_replace( 'Пребарувај', 'Барај', $html );


	return $html;
}

add_filter( 'get_search_form', 'wpforo_search_form' );


/**
 * Load svg icons variables
 */

require get_template_directory() . '/inc/svg-icons.php';


function my_search_form_text($text) {

     return $text . close_icon_svg();
}

add_filter('get_search_form', 'my_search_form_text');