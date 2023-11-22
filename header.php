<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rockable
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'rockable' ); ?></a>

	<header id="masthead" class="site-header">

	</header><!-- #masthead -->

  <button class="switch-theme" aria-label="Change website theme">
    <img src="<?php echo get_template_directory_uri()?>/assets/new-glasses.svg" class="to-dark-mode"/>
    <img src="<?php echo get_template_directory_uri()?>/assets/new-sun.svg" class="to-light-mode" />
  </button>