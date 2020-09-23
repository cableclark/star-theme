<?php
get_header();
?>
	<main id="primary" class="site-main">
		<div class="index-container">
		<?php
			$query = new WP_Query('cat=-33');
			if ( $query->have_posts() ) :
				if ( is_home() && ! is_front_page() ) :?>
		<header>
			<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
		</header>
		<?php endif;
			/* Start the Loop */
			while ( $query->have_posts() ) :
				$query->the_post();
				get_template_part( 'template-parts/excerpt', get_post_type() );
			endwhile;
			wp_reset_postdata();
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif;?>
		</div>
		<?php $query->the_posts_pagination( array(
				'mid_size'  => 1,
				'prev_text' => __( '<', 'textdomain' ),
				'next_text' => __( '>', 'textdomain' ),
			) );
		?>
	</main>
<?php
get_sidebar();
get_footer();
