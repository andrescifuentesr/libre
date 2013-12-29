<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package libre
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> onload="initialize()" >
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<h1 class="site-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<!--<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>-->
		</div>
		<div class="site-social site-social-header">
			<a href="https://www.facebook.com/" target="_blank">
				<img src="<?php bloginfo('template_directory'); ?>/img/icon-facebook.svg" alt="linkfacebookedin" class="" >
			</a>
			<a href="https://twitter.com" target="_blank">
				<img src="<?php bloginfo('template_directory'); ?>/img/icon-twitter.svg" alt="twitter" class="" >
			</a>
			<a href="#" target="_blank">
				<img src="<?php bloginfo('template_directory'); ?>/img/icon-phone.svg" alt="teléphono libre" class="" >
			</a>
		</div><!-- .site-social -->

<!--
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<h1 class="menu-toggle"><?php _e( 'Menu', 'libre' ); ?></h1>
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'libre' ); ?></a>

			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav>
-->
		<!-- #site-navigation -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
