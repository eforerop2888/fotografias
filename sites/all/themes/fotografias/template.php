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


function fotografias_form_alter( &$form, &$form_state, $form_id ) {
  if (TRUE === in_array( $form_id, array( 'user_login', 'user_login_block'))){
    $form['name']['#attributes']['placeholder'] = t('Nombre de usuario');
    $form['pass']['#attributes']['placeholder'] = t('Contraseña');
  }
}


