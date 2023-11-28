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

<?php
  $primaryColor = get_field( 'primary_color', 'options');
  $secondaryColor = get_field( 'secondary_color', 'options');
  $toDarkMode = get_field( 'to_dark_mode', 'options');
  $toLightMode = get_field( 'to_light_mode', 'options');
?>

<style>
	body {
		--primary-color: <?php echo $primaryColor; ?>;
		--secondary-color: <?php echo $secondaryColor; ?>;
	}

	body.active {
		--primary-color: var(--secondary-color);
	}
</style>

<body <?php body_class(); ?> >

<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'rockable' ); ?></a>

	<header id="masthead" class="site-header">
		<button class="switch-theme" aria-label="Change website theme">
			<?php if ( $toDarkMode ) : ?>
				<img src="<?php echo $toDarkMode ?>" class="to-dark-mode" />
			<?php	endif; ?>

			<?php if ( $toLightMode ) : ?>
				<img src="<?php echo $toLightMode ?>" class="to-light-mode" />
			<?php	endif; ?>
		</button>

		<div class="section-nav">
			<a href="#hero" class="active"></a>
			<a href="#designed"></a>
			<a href="#why"></a>
			<a href="#process"></a>
			<a href="#how"></a>
		</div>
	</header>