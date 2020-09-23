<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Star Star
 */

?>
<div id="app" class="container">
	<article id="post-<?php the_ID(); ?>">
		<header class="entry-header"> 
			<?php
				the_title( '<h2 class="content-title single__title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			?>
			<div class="entry-meta">
				<?php
				star_posted_on();
				?>
			</div><!-- .entry-meta -->
		</header><!-- .entry-header -->
		<div class="entry-content">
			<?php
			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading...<span class="screen-reader-text"> "%s"</span>', 'star' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			);
			?>
			<?php 
				star_get_tags(); 
				?>
			<div class="edit-button">
				<?php edit_post_link( __( 'edit', 'textdomain' ), '<p>', '</p>' );?> 
			</div>
		</div><!-- .entry-content -->
	</article><!-- #post-<?php the_ID(); ?> -->
</div> <!-- Container ends -->
