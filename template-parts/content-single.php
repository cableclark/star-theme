<?php
/**
 * Template part for displaying single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Star Star
 */

?>
<div id="app">
	<article id="post-<?php the_ID(); ?>" class="single-article">
		<header>
		<div class="thumb-container"><?php the_post_thumbnail();?></div>	

			<?php
			if ( is_singular() ) :
				the_title( '<h1 >', '</h1>' );
			else :
				the_title( '<h2><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;
			?>
			<div class="entry-meta">
				<?php
					miss_albini_posted_on();
				?>
			</div><!-- .entry-meta -->
		</header><!-- .entry-header -->
		<div class="entry-content">
		
			<?php
			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading...<span class="screen-reader-text"> "%s"</span>', 'miss-albini' ),
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
			<p> <?php star_posted_by(); ?> </p>
			<?php 
			star_get_tags(); 
			?>
		</div><!-- .entry-content -->
	</article><!-- #post-<?php the_ID(); ?> -->
</div> <!-- Container ends -->
