<?php
/**
 * This file loads the content partially.
 */

define( 'PARTIAL', time() );

global $post;

// Check that there are more posts to load.
while ( have_posts() ) : the_post();

	/**
	 * Allow for changing the template partial.
	 *
	 * @param string  $type  The default template type to use.
	 * @param WP_Post $post  The post object for the current post.
	 */
	$template_type = apply_filters( 'make_template_content_single', 'single', $post );
	get_template_part( 'partials/content', $template_type );

	get_template_part( 'partials/nav', 'post' );

// End the loop.
endwhile;

?>