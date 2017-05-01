<?php

function fotografias_theme() {
  $items = array();
  
  $items['user_login'] = array(
    'render element' => 'form',
    'path' => drupal_get_path('theme', 'fotografias') . '/templates',
    'template' => 'user-login',
    'preprocess functions' => array(
       'fotografias_preprocess_user_login'
    ),
  );
  return $items;
}
