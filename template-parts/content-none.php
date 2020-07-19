<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Miss Ablini
 */

?>
<section class="no-results not-found">
	<header class="page-header">
		<h1 class="search-title"><?php esc_html_e( 'No posts found:', 'Miss Albini' ); ?></h1>
	</header><!-- .page-header -->
	<div class="page-content no-results-container">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :
			printf(
				'<p>' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'Miss Albini' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);

		elseif ( is_search() ) :
			?>

			<p><?php esc_html_e( 'Nothing to see here, sorry...', 'Miss Albini' ); ?></p>
		<?php
		endif;
		?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
