<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package afflifiate_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> style="background-image: url(<?php echo esc_url(get_template_directory_uri()) .'/assets/images/body-bg.gif';?>); background-position: fixed;">
<div id="page" class="site container">
	<?php get_template_part( 'template-parts/headers/header-one'); //Chose you header style ?>
<div id="content" class="site-content">
<div class="social-left-fixed">
	<?php
	$social_link_array = cs_get_option( 'social_link_array' );
	foreach ($social_link_array as $single_social_link ) :
	?>
	<a href="<?php echo $single_social_link['social_link'] ?>" target="_blank"><i style="background: <?php echo $single_social_link['htop_icon_bg_color'] ?>; color: <?php echo $single_social_link['htop_icon_color'] ?>" class="<?php echo $single_social_link['social_icon'] ?>" aria-hidden="true"></i></a>
	<?php endforeach; ?>
</div>
