<?php

/**
 * Head clean-up
 */

remove_action ('wp_head', 'rsd_link');

function crunchify_remove_version() {
		return '';
	}

	add_filter('the_generator', 'crunchify_remove_version');
	remove_action( 'wp_head', 'wlwmanifest_link');
	remove_action( 'wp_head', 'wp_shortlink_wp_head');
	remove_action('wp_head', 'rest_output_link_wp_head', 10);
	remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
	remove_action('template_redirect', 'rest_output_link_header', 11, 0);
/**
 * Stop loading contact form 7 scrips on every page
 */	
	add_filter( 'wpcf7_load_js', '__return_false' );
    add_filter( 'wpcf7_load_css', '__return_false' );

/**
 * Remove previous/next
 */

   remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );

/**
 * Force HTTPS for loading scripts
 */
function wp_secure_page_force_ssl( $force_ssl, $post_id = 0 ) {
    $force_ssl_on_these_posts = array(4729, 5547, 2493, 4679, 5454, 4192, 4750, 5473, 5344, 5183, 4222, 5135, 5492);

    if(in_array($post_id, $force_ssl_on_these_posts )) {
        return true;
    }

    return $force_ssl;
}
add_filter('force_ssl' , 'wp_secure_page_force_ssl', 1, 3);


/**
 * Add preconnect for Google Fonts.
 *
 *
 * @param array  $urls           URLs to print for resource hints.
 * @param string $relation_type  The relation type the URLs are printed.
 * @return array $urls           URLs to print for resource hints.
 */
function miss_albini_resource_hints( $urls, $relation_type ) {
	if ( wp_style_is( 'miss_albini-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
		$urls[] = array(
			'href' => 'https://fonts.gstatic.com',
			'crossorigin',
		);
	}

	return $urls;
}

add_filter( 'wp_resource_hints', 'miss_albini_resource_hints', 10, 2 );


/**
 * Disable RSS
 */

function itsme_disable_feed() {
	wp_die( __( 'No feed available, please visit the <a href="'. esc_url( home_url( '/' ) ) .'">homepage</a>!' ) );
   }
   add_action('do_feed', 'itsme_disable_feed', 1);
   add_action('do_feed_rdf', 'itsme_disable_feed', 1);
   add_action('do_feed_rss', 'itsme_disable_feed', 1);
   add_action('do_feed_rss2', 'itsme_disable_feed', 1);
   add_action('do_feed_atom', 'itsme_disable_feed', 1);
   add_action('do_feed_rss2_comments', 'itsme_disable_feed', 1);
   add_action('do_feed_atom_comments', 'itsme_disable_feed', 1);
   remove_action( 'wp_head', 'feed_links_extra', 3 );
   remove_action( 'wp_head', 'feed_links', 2 );


/**
 * Remove Emojis
 */
   remove_action('wp_head', 'print_emoji_detection_script', 7);
   remove_action('wp_print_styles', 'print_emoji_styles');
   remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
   remove_action( 'admin_print_styles', 'print_emoji_styles' );
