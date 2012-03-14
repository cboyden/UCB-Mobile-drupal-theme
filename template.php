<?php

function ucb_mobile_menu_tree($tree) {
  return '<div class="menu-full menu-padded"><ol>' . $tree . '</ol></div>';
}

function ucb_mobile_menu_item($link, $has_children, $menu = '', $in_active_trail = FALSE, $extra_class = NULL) {
  $class = '';
  if (!empty($extra_class)) {
    $class = ' class="' . $extra_class . '"';
  }
  return '<li' . $class . '>' . $link . $menu . "</li>\n";
}

function ucb_mobile_user_bar() {
  global $user;                                                               
  $output = '';

  if (!user_is_logged_in()) {                                                          
    $output .= theme('item_list', array(
    l(t('log in'), 'user/login'),
	l(t('register'), 'user/register')
	));
  }                                                                           
  else {                                                                      
    $output .= theme('item_list', array(
    l(t('log out'), 'logout')));
  }     
  return $output;
}
