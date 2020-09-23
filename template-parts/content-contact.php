<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Star Star
 */
?>
<?php the_post_thumbnail("large"); ?>
<article id="post-<?php the_ID(); ?>" >
	<header class="entry-header">
		<?php the_title( '<h1 class="sexwork__title single__title">', '</h1>' ); 
		edit_post_link( __( 'Edit', 'textdomain' ), '<p>', '</p>' );
		?>
	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
