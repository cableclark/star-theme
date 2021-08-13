<?php /*
Template Name: front-page
*/
?>
<?php
    get_header();
?>

<?php
    if (get_locale() == "en_GB") {
            get_template_part( 'template-parts/front', "en" );
    } else {
        	get_template_part( 'template-parts/front', "mk" );
        }
get_sidebar();
get_footer();