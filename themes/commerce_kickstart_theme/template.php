<?php

/**
 * Preprocess variables for html.tpl.php
 *
 * @see system_elements()
 * @see html.tpl.php
 */
function commerce_kickstart_theme_preprocess_html(&$variables) {
  // Add conditional stylesheets for IE
  drupal_add_css(path_to_theme() . '/css/ie-lte-8.css', array('group' => CSS_THEME, 'weight' => 20, 'browsers' => array('IE' => 'lte IE 8', '!IE' => FALSE), 'preprocess' => FALSE));
  drupal_add_css(path_to_theme() . '/css/ie-lte-7.css', array('group' => CSS_THEME, 'weight' => 21, 'browsers' => array('IE' => 'lte IE 7', '!IE' => FALSE), 'preprocess' => FALSE));

  // Add external libraries.
  drupal_add_library('commerce_kickstart_theme', 'selectnav');
  drupal_add_library('commerce_kickstart_theme', 'responsive_menu');
}

/**
 * Implements hook_library().
 */
function commerce_kickstart_theme_library() {
  $libraries['selectnav'] = array(
    'title' => 'Selectnav',
    'version' => '',
    'js' => array(
      libraries_get_path('selectnav.js') . '/selectnav.min.js' => array(),
    ),
  );
  $libraries['responsive_menu'] = array(
    'title' => 'Responsive menu',
    'version' => '',
    'js' => array(
      libraries_get_path('responsive_menu') . '/jquery.mobilemenu.min.js' => array(),
    ),
  );
  return $libraries;
}
