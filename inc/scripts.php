<?php
/**
 * Enqueue scripts and styles.
 */
function star_scripts() {
	//Enqueue Google fonts	
	wp_enqueue_style( 'star-fonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&display=swap');
	
	wp_enqueue_style( 'star-fonts-2', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;900&display=swap');
	
	//Enqueue CSS
	wp_enqueue_style( 'star-style', get_stylesheet_uri(), array(), _S_VERSION );
		
	//Enqueue JS
	wp_enqueue_script( 'star-index', get_template_directory_uri() . '/js/index.js', array(), _S_VERSION, true );
	
    if (is_front_page( )) {
		wp_enqueue_script( 'star-frontpage', get_template_directory_uri() . '/js/frontpage.js', array(), _S_VERSION, true );
	}	

	wp_style_add_data( 'star-style', 'rtl', 'replace' );
	
}

add_action( 'wp_enqueue_scripts', 'star_scripts' );