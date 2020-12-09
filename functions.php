<?php
//Menus dinâmicos
function ecovila_register_menus()
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

//Banner
function ecovila_register_banner()
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

//Depoimentos
function ecovila_register_testimony()
{
  register_post_type(
    'depoimentos',
    array(
      'labels' => array(
        'name' => __('Depoimentos'),
        'singular_name' => __('Depoimento'),
        'add_new' => __('Novo depoimento'),
      ),

      'public' => true,
      'has_archive' => false,
      'menu_icon' => 'dashicons-format-quote',
      'supports' => array('title', 'page-attributes'),
    )
  );
}

//Parceiros
function ecovila_register_partners()
{
  register_post_type(
    'slider_partners',
    array(
      'labels' => array(
        'name' => __('Parceiros'),
        'singular_name' => __('Parceiro'),
        'add_new' => __('Novo parceiro'),
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
function ecovila_change_logo_class($html)
{
  $html = str_replace('custom-logo-link', 'header-logo-link', $html);
  return $html;
}

//Registrando as funções
add_action('init', 'ecovila_add_resources');
add_action('init', 'ecovila_register_banner');
add_action('init', 'ecovila_register_testimony');
add_action('init', 'ecovila_register_menus');
add_action('init', 'ecovila_register_information');
add_action('init', 'ecovila_register_partners');
add_filter('admin_footer_text', 'ecovila_custom_footer_admin');
add_filter('get_custom_logo', 'ecovila_change_logo_class');


//ADVANCED CUSTOM FIELDS --------------------------------->