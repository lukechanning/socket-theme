<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Socket_theme
 * @since 1.0.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<?php
if( get_theme_mod( 'socket_background') ) :
    $imageURL = esc_url(get_theme_mod( 'socket_background' ));
else : 
    $imageURL = get_template_directory_uri() . "/assets/img/socket_background.jpg";
endif;
?>

<body <?php body_class(); ?> style="background-image:url(<?php echo $imageURL ?>);">
<div id="page" class="hfeed site">
	<div id="content" class="site-content">