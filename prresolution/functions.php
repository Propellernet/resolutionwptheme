<?php

function reading_time( $post_id ) {
	$content = get_post_field( 'post_content', $post_id );
	$content = preg_split( '/\s+/', wp_strip_all_tags( $content ) );
	$word_count = count( $content );

	$reading_time = ceil( $word_count / 300 );

	return $reading_time . ' minute';
}

function add_bootstrap_responsive_image_class($class){
    $class .= ' img-fluid mb-3';
    return $class;
}
add_filter('get_image_tag_class','add_bootstrap_responsive_image_class');

add_theme_support( 'post-thumbnails' );

wp_enqueue_style( 'stylesheet', get_stylesheet_uri() );
?>
