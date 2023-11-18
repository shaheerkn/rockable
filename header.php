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

  <img src="<?php echo get_template_directory_uri()?>/assets/background-red.png" class="bg-el bg-el--red" fetchPriority="high" />
  <img src="<?php echo get_template_directory_uri()?>/assets/background-blue.png" class="bg-el bg-el--blue" fetchPriority="high" />

  <button class="switch-theme" aria-label="Change website theme">
    <img src="<?php echo get_template_directory_uri()?>/assets/glasses.png" class="to-dark-mode" />
    <img src="<?php echo get_template_directory_uri()?>/assets/dark-mode.png" class="to-light-mode" />
  </button>