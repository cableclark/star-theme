<?php
/**
 * The header for our theme
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package Star Star
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-169345385-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'UA-104976595-1');
	</script>
	<?php 
	wp_head(); 
	if(is_single()) {
		add_twitter_card(get_queried_object_id());
		}
	?>
</head>
<body>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'Star-star' ); ?></a>
	<header id="masthead" class="site-header <?php if (!is_front_page()) {echo "smaller-header-nothomed smaller-header-dark";}?>">
		<div class="site-branding <?php if (!is_front_page()) {echo "site-branding--nothomed";}?>"><?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?><h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php
			else :
				?><p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;
			$star_description = get_bloginfo( 'description', 'display' );
			if ( $star_description || is_customize_preview() ) :
				?><p class="site-description"><?php echo $miss_albini_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?></div>
		<nav id="site-navigation" class="main-navigation">
			<div class="main-menu">
			<div class="close-menu"><svg
					width="20"
					height="20"
					viewBox="0 0 20 20"
					version="1.1"
					>
					<defs
						id="defs2" />
					<g
						inkscape:label="Layer 1"
						inkscape:groupmode="layer"
						id="layer1">
						<path
						style="fill:#000000;stroke-width:0.0726954"
						d="M 2.1681305,17.400022 1.8957855,17.127676 5.6216326,13.401303 9.3474799,9.674928 5.6216326,5.9485544 1.8957855,2.2221803 2.1681305,1.949835 2.4404765,1.6774896 6.1668503,5.4033367 9.8932242,9.129184 13.619598,5.4033367 l 3.726374,-3.7258471 0.272346,0.2723454 0.272345,0.2723453 -3.725847,3.7263741 -3.725847,3.7263736 3.725847,3.726375 3.725847,3.726373 -0.272345,0.272346 -0.272346,0.272345 L 13.619598,13.94652 9.8932242,10.220673 6.1668503,13.94652 2.4404765,17.672367 Z"
						id="path54" />
					</g>
					</svg>
					</div>
				<?php
				wp_nav_menu(array('theme_location' => 'menu-1','menu_id'=> 'primary-menu',));
				if ( ! is_active_sidebar( 'sidebar-1' ) ) {
					return;
				}
				?>  
				<?php echo search_icon_svg();?> 	
			</div>
			<div class="toggler" aria-controls="primary-menu" aria-expanded="false"> 
				<div></div>
				<div></div>
				<div></div>
			</div>
			<div class="menu-hider"></div>
		</nav>
	</header>