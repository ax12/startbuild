<?php
if (! defined ('ABSPATH')) {
    exit;
}
function sitearsenal_scripts() {
    wp_enqueue_style( 'sitearsenal-style', get_stylesheet_uri() );
    wp_enqueue_style( 'custom', get_template_directory_uri() . '/custom.css' );
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');

    wp_enqueue_script( 'sitearsenal-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
    wp_enqueue_script( 'sitearsenal-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'sitearsenal_scripts' );
