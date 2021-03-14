<?php

/**
 * ACF Options Page
 */
if ( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}

/**
 * ACF Local JSON
 */
add_filter('acf/settings/save_json', function ( $path ) {
    // update path
    $path = get_stylesheet_directory() . '/acf-json';
    // return
    return $path;   
});

/**
 * ACF Local JSON - Load Point
 */
add_filter('acf/settings/load_json', function ( $paths ) {
    // remove original path (optional)
    unset($paths[0]);
    // append path
    $paths[] = get_stylesheet_directory() . '/acf-json';
    // return
    return $paths;
});

function melanie_build_typography_css_properties( $typography, $important = false ) {
  $css_properties = '';
  $css_important = ($important) ? ' !important' : '';
  if ($typography['font_family']) {
    $css_properties .= 'font-family: \'' . $typography['font_family'] . '\', Arial, Helvetica, sans-serif' . $css_important . '; ';
  }
  if ($typography['font_weight']) {
    $css_properties .= 'font-weight: ' . $typography['font_weight'] . '' . $css_important . '; ';
  }
  if ($typography['font_style']) {
    $css_properties .= 'font-style: ' .  $typography['font_style'] . '' . $css_important . '; ';
  }
  if ($typography['text_color']) {
    $css_properties .= 'color: ' . $typography['text_color'] . '' . $css_important . '; ';
  }
  if ($typography['font_size']) {
    $css_properties .= 'font-size: ' . $typography['font_size'] . 'px' . $css_important . '; ';
  }
  if ($typography['text_transform']) {
    $css_properties .= 'text-transform: ' . $typography['text_transform'] . $css_important . '; ';
  }
  return $css_properties;
}

add_action('wp_head', function() {
  $headings = get_field('headings', 'option');
  $headings_secondary = get_field('headings_secondary', 'option');
  $body = get_field('body', 'option');
  $buttons = get_field('buttons', 'option');
  ?>
  <style>
  <?php if ($headings) { ?>
    h1, h2, h3, h4, h5, h6,
    .h1, .h2, .h3, .h4, .h5, .h6,
    .heading-primary {
      <?php echo melanie_build_typography_css_properties($headings['typography']); ?>
    }
  <?php } ?>
  <?php if ($headings_secondary) { ?>
    .heading-secondary {
      <?php echo melanie_build_typography_css_properties($headings_secondary['typography'], true); ?>
    }
  <?php } ?>
  <?php if ($body) { ?>
    body {
      <?php echo melanie_build_typography_css_properties($body['typography']); ?>
    }
  <?php } ?>
  <?php if ($buttons) { ?>
    .btn {
      <?php echo melanie_build_typography_css_properties($buttons['typography']); ?>
    }
  <?php } ?>
  </style>
  <?php
});


