<?php
//Menus dinâmicos
function ecovila_register_my_menus()
{
  register_nav_menus(
    array(
      'header_menu' => __('Sitemap - Cabeçalho'),
      'footer_menu_nav' => __('Sitemap - Rodapé'),
    )
  );
}

//Informações da empresa
function ecovila_register_information()
{
  register_post_type(
    'information',
    array(
      'labels' => array(
        'name' => __('Informações sobre a empresa'),
        'add_new' => __('Adicionar informações'),
      ),

      'public' => true,
      'has_archive' => false,
      'menu_icon' => 'dashicons-share',
      'supports' => array('title', 'page-attributes'),
    )
  );
}

//Recursos no site
function ecovila_add_resources()
{
  add_theme_support('custom-logo');
  add_theme_support('post-thumbnails');
}

//Sliders: Banner
function register_slider_banner()
{
  register_post_type(
    'slider_banner',
    array(
      'labels' => array(
        'name' => __('Banner'),
        'singular_name' => __('Banner'),
        'add_new' => __('Adicionar slide'),
      ),

      'public' => true,
      'has_archive' => false,
      'menu_icon' => 'dashicons-images-alt',
      'supports' => array('title', 'page-attributes'),
    )
  );
}


// Customizar o Footer do WordPress
function ecovila_custom_footer_admin()
{
  echo 'Criado por <a href="https://jtpsolution.com.br/">JTP Solution</a>';
}


// Customizando classe do the_custom_post()
function change_logo_class($html)
{
  $html = str_replace('custom-logo-link', 'header-logo-link', $html);
  return $html;
}

//Registrando as funções
add_action('init', 'ecovila_add_resources');
add_action('init', 'register_slider_banner');
add_action('init', 'ecovila_register_my_menus');
add_action('init', 'ecovila_register_information');
add_filter('admin_footer_text', 'ecovila_custom_footer_admin');
add_filter('get_custom_logo', 'change_logo_class');


//ADVANCED CUSTOM FIELDS --------------------------------->