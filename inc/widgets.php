<?php 

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function star_star_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'miss_albini' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'miss_albini' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'similar', 'miss_albini' ),
			'id'            => 'similar',
			'description'   => esc_html__( 'Add widgets here.', 'miss_albini' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="album-of-the-week">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'star_star_widgets_init' );