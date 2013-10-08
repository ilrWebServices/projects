<?php

/**
 * Implements hook_preprocess_hook()
 *
 * Adds custom markup to footer.
 * Adds modernizr.js
 */
function hoc_theme_preprocess_page(&$variables) {
  // Menu
  $menu_item = menu_get_item(); // Get current menu item from path
  $main_menu_tree = menu_tree_all_data('main-menu', null, 3);
  $variables['main_menu_expanded'] = menu_tree_output($main_menu_tree);
  // Footer content
  $variables['page']['footer'][] = array('#markup' => '<div class="copyright"><p>&copy; ' . date('Y') . ', Cornell University</p></div>');

  drupal_add_js($variables['directory'] . '/js/vendor/modernizr-2.6.2.min.js');
}

/**
 * Implements hook_js_alter().
 *
 * Disables sticky table headers FTW!
 */
function hoc_theme_js_alter(&$js) {
  unset($js['misc/tableheader.js']);
}

/**
 * Implements hook_menu_tree_MENUNAME()
 */
function hoc_theme_menu_tree__main_menu($variables){
  return '<ul class="menu" id="main-menu">' . $variables['tree'] . '</ul>';
}

/**
 * Implements theme_breadcrumb()
 */
function hoc_theme_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];
  // add current page title, if it exists, or the active title from the menu
  $breadcrumb[] = (drupal_get_title()) ? drupal_get_title() : menu_get_active_title();

  if (!empty($breadcrumb)) {
    return '<div class="breadcrumb">' . implode(' » ', $breadcrumb) . '</div>';
  }
}