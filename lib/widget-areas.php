<?php

//Let's add our custom widget blocks
if ( ! function_exists( 'custom_sidebar_widgets' ) ) :
function custom_sidebar_widgets() {
    
	register_sidebar(array(
	  'id' => 'demo-intro',
	  'name' => __( 'Home Intro Text', 'socket_theme' ),
	  'description' => __( 'Add a text widget to introduce the demonstrated plugin', 'socket_theme' ),
	  'before_widget' => '<div class="intro-text">',
	  'after_widget' => '</div>',
	  'before_title' => '<h1 class="intro-title">',
	  'after_title' => '</h1>'
	));
	register_sidebar(array(
	  'id' => 'plugin-demo',
	  'name' => __( 'Plugin Demo Area', 'socket_theme' ),
	  'description' => __( 'Add the plugin you wish to demonstrate here', 'socket_theme' ),
	  'before_widget' => '<div class="plugin-area demo>',
	  'after_widget' => '</div>',
	  'before_title' => '<h2>',
	  'after_title' => '</h2>'
	));
	
}
add_action( 'widgets_init', 'custom_sidebar_widgets' );
endif;

?>