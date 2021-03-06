<?php

/**
 * Implements hook_preprocess_hook()
 *
 * Adds custom markup to footer.
 * Adds modernizr.js
 */
function webupdates_theme_preprocess_page(&$variables) {
  // Menu
  $menu_item = menu_get_item(); // Get current menu item from path
  $main_menu_tree = menu_tree_all_data('main-menu', null, 3);
  $variables['main_menu_expanded'] = menu_tree_output($main_menu_tree);
  // Footer content
  $variables['page']['footer'][] = array('#markup' => '<div class="copyright"><p>&copy; ' . date('Y') . ', ILR School, Cornell University</p></div>');

  drupal_add_js($variables['directory'] . '/js/vendor/modernizr-2.6.2.min.js');
}

/**
 * Implements hook_form_FORM_ID_alter()
 *
 */
function webupdates_theme_form_user_login_alter(&$form, $form_state, $form_id) {
  $form['netid'] = array(
    '#markup' => '<h2>Cornell Users</h2><p><a class="button" href="/saml_login">NetID Login</a></p><h2>Drupal Login</h2>',
    '#weight' => -10,
  );
}

/**
 * Implements hook_menu_alter
 * Removes the password reset functionality
 */
function webupdates_theme_menu_alter(&$items) {
  $items['user/password']['access callback'] = FALSE;
}

/**
 * Implements hook_js_alter().
 *
 * Disables sticky table headers FTW!
 */
function webupdates_theme_js_alter(&$js) {
  unset($js['misc/tableheader.js']);
}

/**
 * Implements hook_menu_tree_MENUNAME()
 */
function webupdates_theme_menu_tree__main_menu($variables){
  return '<ul class="menu" id="main-menu">' . $variables['tree'] . '</ul>';
}

/**
 * Implements theme_breadcrumb()
 */
function webupdates_theme_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];
  // add current page title, if it exists, or the active title from the menu
  $breadcrumb[] = (drupal_get_title()) ? drupal_get_title() : menu_get_active_title();

  if (!empty($breadcrumb)) {
    return '<div class="breadcrumb">' . implode(' » ', $breadcrumb) . '</div>';
  }
}
