<?php 
// Add Shortcode
function get_cat_posts( $atts , $content = null ) {

	// Attributes
	$argument = shortcode_atts(
		array(
            "cat"=> "category",
            "post_type"=> "post_type"
		),
		$atts
    );
    
    // The query
    $args = array (
        'cat'              => $argument["cat"],
        'posts_per_page'   => 3,
    );

    $the_query = new WP_Query($args); 


    if ( $the_query->have_posts() ) : 
        ob_start();
        while ( $the_query->have_posts() ) : $the_query->the_post();
            get_template_part( 'template-parts/excerpt', $argument["post_type"]);
    
        endwhile;
        $ob_str=ob_get_contents();
        ob_end_clean();
        return $ob_str;
   
    wp_reset_postdata();
    
    else: 
        return "<p>" . _e( 'Sorry, no posts matched your criteria.' ) . "</p>";
    endif;

}


add_shortcode( 'cat_posts', 'get_cat_posts' );


