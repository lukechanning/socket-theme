<?php
//Add Our custom areas for socket

function socket_customize_register( $wp_customize ) {
    
    //Add custom background image via customization
    $wp_customize->add_section( 'socket_background_section' , array(
        'title'       => __( 'Socket Background', 'socket_theme' ),
        'priority'   => 20,
        'description' => 'Add a background image to the demo page',
    ) );
    $wp_customize->add_setting( 'socket_background' );
    $wp_customize->add_control( new WP_Customize_Image_Control(
    $wp_customize, 'socket_background', array(
        'label'   => __( 'Background', 'socket_theme' ),
        'section' => 'socket_background_section',
        'settings' => 'socket_background',
    ) ) );
    
    //Add logo section
    $wp_customize->add_section( 'socket_logo_section' , array(
        'title'       => __( 'Socket Logo', 'socket_theme' ),
        'priority'   => 30,
        'description' => 'Add a logo image to the demo page',
    ) );
    $wp_customize->add_setting( 'socket_logo' );
    $wp_customize->add_control( new WP_Customize_Image_Control(
    $wp_customize, 'socket_logo', array(
        'label'   => __( 'Logo', 'socket_theme' ),
        'section' => 'socket_logo_section',
        'settings' => 'socket_logo',
    ) ) );
    
}
add_action( 'customize_register', 'socket_customize_register' );

//Add menu walker 
function register_socket_menu() {
  register_nav_menus(
    array(  
        'socket_navigation' => __( 'socket Navigation' )
    )
  );
} 
add_action( 'init', 'register_socket_menu' );
?>