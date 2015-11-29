<?php
if( ! function_exists( 'socket_enqueue_style' ) ) {
    function socket_enqueue_style()
    {
        // Register our scripts and styles
        wp_register_style( 'socket-stylesheet', get_stylesheet_directory_uri() . '/app.css', array(), '', 'all' );
        wp_register_script( 'socket-js', get_stylesheet_directory_uri() . '/js/custom.min.js', array(), '', 'true' );
        
        //Enqueue the newly registered gentlemen
        wp_enqueue_style( 'socket-stylesheet' );
        wp_enqueue_script( 'socket-js' );

    }
}
add_action( 'wp_enqueue_scripts', 'socket_enqueue_style');
?>