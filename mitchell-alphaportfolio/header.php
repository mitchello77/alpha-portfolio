<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Alpha-Portfolio
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->
	<header id="masthead" class="site-header" role="banner">
	<nav role="navigation">
		<a href="<?php home_url() ?>" class="logo"></a>
		<ul>
			<li><a href="<?php home_url(); ?>">Projects</a></li>
			<li><a href="<?php home_url(); ?>">About</a></li>
			<li><a href="<?php home_url(); ?>">Contact</a></li>
		</ul>
		<div class="social">
			<a href="#" title="Connect with me on Linkedin" target="_blank"><span class="icon_linkedin"></span></a>
		</div>
	</nav>
</header>
