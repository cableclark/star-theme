<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package miss-albini
 */

if ( ! function_exists( 'miss_albini_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function miss_albini_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}
		$time_string = sprintf(
			$time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date('j. F, Y') ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date('j m, Y') )
		);
		$posted_on = sprintf(
			/* translators: %s: post date. */
			esc_html_x( ' %s', 'post date', 'miss-albini' ),
			 $time_string 
		);
		echo '<span class="posted-on">' . $posted_on . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

	}
endif;

if ( ! function_exists( 'miss_albini_posted_by' ) ) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function miss_albini_posted_by() {
		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( 'Author: %s', 'post author', 'miss-albini' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);
		echo '<span class="byline"> ' . $byline . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

	}
endif;

if ( ! function_exists( 'miss_albini_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function miss_albini_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'miss-albini' ) );
			if ( $categories_list ) {
				/* translators: 1: list of categories. */
				printf( '<span class="cat-links">' . esc_html__('%1$s', 'miss-albini' ) . '</span>', $categories_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}
		}
	}
endif;

function miss_albini_get_tags () {
		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'miss-albini' ) );
		if ( $tags_list ) {
			/* translators: 1: list of tags. */
			printf( '<span class="tags-links">' . esc_html__( 'Tags: %1$s', 'miss-albini' ) . '</span>', $tags_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		}
}

if ( ! function_exists( 'miss_albini_post_thumbnail' ) ) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function miss_albini_post_thumbnail($size="large_medium") {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}
		if ( is_singular() ) :
			?>
			<div class="post-thumbnail">
				<?php the_post_thumbnail("full"); ?>
			</div><!-- .post-thumbnail 1 -->
		<?php else : ?>
			<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1"><?php
					the_post_thumbnail(
						$size,
						array(
							'alt' => the_title_attribute(
								array(
									'echo' => false,
								)
							),
						)
					);
				?></a>
			<?php
		endif; // End is_singular().
	}
endif;

if ( ! function_exists( 'wp_body_open' ) ) :
	/**
	 * Shim for sites older than 5.2.
	 *
	 * @link https://core.trac.wordpress.org/ticket/12563
	 */
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
endif;

/**
 * Add a twitter card
 */		

function add_twitter_card ($post_id) {
	if(is_single() || is_page()) {
		$twitter_url    = get_permalink();
		$twitter_title  = get_the_title();
		$twitter_desc   = get_the_excerpt();
		$twitter_thumbs = wp_get_attachment_image_src( get_post_thumbnail_id($post_id));
		$twitter_thumb  = $twitter_thumbs[0];
			if(!$twitter_thumb) {
			$twitter_thumb = 'http://www.gravatar.com/avatar/8eb9ee80d39f13cbbad56da88ef3a6ee?rating=PG&size=75';
		  }
	   $twitter_name   = str_replace('@', '', get_the_author_meta('twitter'));
	   $twiter_card = "<meta name='twitter:card' value='summary'/>";
	   $twiter_card .= "<meta name='twitter:url' value='$twitter_url' />";
	   $twiter_card .= "<meta name='twitter:title' value='$twitter_title'/>";
	   $twiter_card .= "<meta name='twitter:description' value=' $twitter_desc;' />";
	   $twiter_card .= "<meta name='twitter:image' value='$twitter_thumb' />";
	   $twiter_card .= "<meta name='twitter:site' value='@inthelostandfound' />";
		if($twitter_name) {
			$twiter_card .= "<meta name='twitter:creator' value=.@ $twitter_name' />";
		}
		echo $twiter_card;
	  }
	
}


