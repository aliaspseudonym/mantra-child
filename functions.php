<?php
remove_filter('the_content_more_link', 'mantra_more_link',10,2);
remove_filter( 'excerpt_more', 'mantra_auto_excerpt_more' );
remove_filter( 'get_the_excerpt', 'mantra_custom_excerpt_more' );

function sbt_auto_excerpt_more( $more ) {
return '...';
}
add_filter( 'excerpt_more', 'sbt_auto_excerpt_more', 20 );

function sbt_custom_excerpt_more( $output ) {return preg_replace('/<a[^>]+>Continue reading.*?<\/a>/i','',$output);
}
add_filter( 'get_the_excerpt', 'sbt_custom_excerpt_more', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}	

function mycustom_scripts_method() {
    global $wp_query;
	wp_enqueue_script(
		'cycle2',
		get_stylesheet_directory_uri() . '/js/jquery.cycle2.min.js',
		array( 'jquery' )
	);
}

add_action( 'wp_enqueue_scripts', 'mycustom_scripts_method' );
?>