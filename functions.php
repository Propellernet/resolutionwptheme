<?php

function reading_time( $post_id ) {
	$content = get_post_field( 'post_content', $post_id );
	$content = preg_split( '/\s+/', wp_strip_all_tags( $content ) );
	$word_count = count( $content );

	$reading_time = ceil( $word_count / 300 );

	return $reading_time . ' minute';
}

add_theme_support( 'post-thumbnails' );
wp_enqueue_style( 'coveragebook-style', get_stylesheet_uri() );

?>
