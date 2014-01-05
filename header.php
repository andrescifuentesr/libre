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
<!-- favicons -->
<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/img/favicon-196x196.png" sizes="196x196" />
<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/img/favicon-160x160.png" sizes="160x160" />
<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/img/favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/img/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/img/favicon-16x16.png" sizes="16x16" />

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
			<a href="https://www.facebook.com/cervecerialibre" target="_blank">
				<img src="<?php bloginfo('template_directory'); ?>/img/icon-facebook.svg" alt="linkfacebookedin" class="" >
			</a>
			<a href="https://twitter.com/cervezalibre" target="_blank">
				<img src="<?php bloginfo('template_directory'); ?>/img/icon-twitter.svg" alt="twitter" class="" >
			</a>
			<a href="mailto:info@cervecerialibre.com">
				<img src="<?php bloginfo('template_directory'); ?>/img/icon-mail.svg" alt="mail libre : info@cervecerialibre.com" class="" >
			</a>
			<a href="tel:0057-4-4484412" target="_blank">
				<img src="<?php bloginfo('template_directory'); ?>/img/icon-phone.svg" alt="teléphono libre" class="" >
			</a>
		</div>
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
