<?php

function fotografias_theme() {
  $items = array();
  
  $items['user_login'] = array(
    'render element' => 'form',
    'path' => drupal_get_path('theme', 'fotografias') . '/templates',
    'template' => 'user-login',
  );

  $items['user_pass'] = array(
    'render element' => 'form',
    'path' => drupal_get_path('theme', 'fotografias') . '/templates',
    'template' => 'user-pass',
  );

  $items['user_profile_form'] = array(
    'render element' => 'form',
    'path' => drupal_get_path('theme', 'fotografias') . '/templates',
    'template' => 'user-profile-form',
  );
  
  return $items;
}


function fotografias_form_alter( &$form, &$form_state, $form_id ) {
  if (TRUE === in_array($form_id, array( 'user_login', 'user_login_block'))){
    $form['name']['#attributes']['placeholder'] = t('Nombre de usuario');
    $form['pass']['#attributes']['placeholder'] = t('Contraseña');
    $form['pass_forgot']['#markup'] = '<a href="' . $GLOBALS['base_url'] . '/user/password">¿Olvidó su contraseña?</a>';
  }

  if (TRUE === in_array($form_id, array( 'user_pass'))){
    $form['name']['#attributes']['placeholder'] = t('Nombre de usuario o dirección de correo');
  }

  /*if (TRUE === in_array($form_id, array( 'user_profile_form'))){
    $form['pass1']['#attributes']['placeholder'] = t('Nueva contraseña');
    $form['pass2']['#attributes']['placeholder'] = t('Confirmar contraseña');
  }*/
}

function fotografias_preprocess_page(&$variables){
  global $user;
  if(user_is_logged_in() && current_path() == 'user/' . $user->uid){
    drupal_goto('galerias');
  }

  if (isset($_GET['url']) != '') {
    global $base_url;
    header('Location: ' . url($base_url . '/download_img?url_download=' . $_GET['url']));
  }
}

