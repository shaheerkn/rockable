<?php

/**
 * Renders rockable Flexible Content
 *
 * @param  string $template The rockable Flexible template
 */
function theme_render_flexible_rows($template = 'blocks', $post_id = null)
{

  if (!$post_id) {
    $post_id = get_the_ID();
  }

  if (get_post_status($post_id) !== 'publish') {
  	return;
  }

  if (have_rows($template, $post_id)) {

    $layout_index = 1;

    while (have_rows($template, $post_id)) {
      the_row();

      set_query_var('layout_index', $post_id . '--' . $layout_index);
      $layout = str_replace('_', '-', get_row_layout());
      get_template_part('template-parts/blocks/block', $layout);

      $layout_index++;
    }
  }
}

/**
 *  Print HTML section ID from Composer field
 */
function theme_section_id()
{
  $section_id = '';

  if ($section_id = get_sub_field('section_id')) {
    $section_id = 'id="' . $section_id . '"';
  }
  echo $section_id;
}

/**
 * echo rockable field with HTML Markup
 *
 * @param  string $name         rockable Object
 * @param  string $before       HTML Markup print before field, default = false
 * @param  string $after        HTML Markup print after field, default = false
 * @param  boolean $sub_field   Default = false
 * @param  boolean $option      Default = false
 * @return Mixed                render rockable Object
 */
function theme_the_field($name = false, $before = '', $after = '', $sub_field = false, $option = false)
{
  if (!$name) {
    return;
  }

  $output = '';
  if (!$option) {
    if (!$sub_field && get_field($name)) {
      $output = get_field($name, false, false);
    } else if ($sub_field && get_sub_field($name)) {
      $output = get_sub_field($name);
    }
  } else {
    if (!$sub_field && get_field($name, 'option')) {
      $output = get_field($name, 'option');
    } else if ($sub_field && get_sub_field($name)) {
      $output = get_sub_field($name, 'option');
    }
  }

  if (!empty($output)) {
    echo $before . do_shortcode($output) . $after;
  }
}

/**
 * Return or echo attachment
 *
 * @param  integer $attachment_id Attachment ID
 * @param  string  $size         Thumbnail size
 * @param  boolean $classes      Whether to print the image class or return no class , default = no-class
 * @param  boolean $echo         Whether to print the image or return URL, default = false
 * @return Mixed                 Print <img> if $echo = true or return URL
 */
function theme_get_attachment($attachment_id = 0, $size = 'thumbnail', $classes = '', $echo = false)
{

  if (!$attachment_id) {
    return false;
  }

  if (!$echo) {
    return wp_get_attachment_image_url($attachment_id, $size);
  }

  $alt = get_post_meta($attachment_id, '_wp_attachment_image_alt', TRUE);


  echo '<img src="' . wp_get_attachment_image_url($attachment_id, $size) . '" data-src="' . wp_get_attachment_image_url($attachment_id, $size) . '" class="' . $classes . '" alt="' . $alt . '"/>';
}

/**
 * Prints an anchor tag from an array of rockable Link object
 */
function theme_the_link($link = array(),  $classes = '', $target = '', $before = '', $after = '', $attributes = '')
{

  if (!is_array($link) || !count($link)) {
    return;
  }

  $output = '';

  if (!empty($target)) {
    $link['target'] = $target;
  }

  if (!strpos($attributes, 'aria-label')) {
    $attributes .= ' aria-label="' . wp_sprintf(__('Open for %s', 'rockable'), strip_tags($link['url'])) . '"';
  }

  $output .= '<a href="' . $link['url'] . '" class="' . $classes . '" target="' . $link['target'] . '"' . $attributes . '>' . $link['title'] . '</a>';

  if (!empty($output)) {
    echo $before . $output . $after;
  }
}


/**
 * Get the assets folder path using `get_template_directory_uri`.
 *
 * @param string $path Path or name of the asset.
 *
 * @return string Returns the full path of the asset.
 */
function asset_path($path, $echo = false)
{
	if (!$path) {
		return '';
	}

	$asset_url = '';

	$base_path = get_template_directory_uri() . '/assets';

	$asset_url = $path[0] === '/'
		? $base_path . $path
		: $base_path . '/' . $path;

	if (!$echo) {
		return $asset_url;
	}

	echo $asset_url;
}


/**
 * Changes ACF JSON directory
 *
 * @param  string $path Default ACF JSON directory
 * @return string
 */
function ja_acf_json_save_point($path) {
	return get_stylesheet_directory() . '/inc/acf-json';
}
add_filter('acf/settings/save_json', 'ja_acf_json_save_point');

/**
 * Loads ACF JSON
 *
 * @param array $paths ACF JSON directory paths
 * @return array
 */
function ja_acf_json_load_point($paths) {
	unset($paths[0]);
	$paths[] = get_stylesheet_directory() . '/inc/acf-json';

	return $paths;
}
add_filter('acf/settings/load_json', 'ja_acf_json_load_point');

// /**
//  * Support Theme Settings Menu
//  */
// if ( function_exists('acf_add_options_sub_page') ) {
//   acf_add_options_sub_page(array(
//   'page_title'    => __( 'Theme Settings', 'northlife-church'),
//   'menu_title'    => __( 'Theme Settings', 'northlife-church'),
//   'parent_slug'   => 'themes.php',
//   'capability'    => 'manage_options',
//   'position'      => 59
// ));
// }

