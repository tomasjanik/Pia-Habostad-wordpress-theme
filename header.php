<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package piahabostad2015
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="http://code.jquery.com/color/jquery.color-2.1.2.min.js"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">
	<div class="stickypush"></div>
	<div class="row navigation">
		<div class="col-xs-12 col-sm-6" >
			<?php 
			wp_nav_menu( array(
				 'container' => 'false',
				 'menu_class' => 'nav',
				 'echo' => true,
				 'before' => '',
				 'after' => '',
				 'link_before' => '',
				 'link_after' => '',
				 'depth' => 0,
				 'walker' => new description_walker())
				 );
			?>
		</div>
	</div>

	</header><!-- #masthead -->

	<div id="content">
