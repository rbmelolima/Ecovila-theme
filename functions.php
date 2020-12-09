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
add_action('init', 'ecovila_register_my_menus');
add_action('init', 'ecovila_register_information');
add_filter('admin_footer_text', 'ecovila_custom_footer_admin');
add_filter('get_custom_logo', 'change_logo_class');


//ADVANCED CUSTOM FIELDS --------------------------------->

if (function_exists('acf_add_local_field_group')) :
  acf_add_local_field_group(array(
    'key' => 'group_5fd0f494944ec',
    'title' => 'Custom Post - Informações sobre a empresa',
    'fields' => array(
      array(
        'key' => 'field_5fd0f4e1bad6f',
        'label' => 'Facebook',
        'name' => 'facebook',
        'type' => 'url',
        'instructions' => '',
        'required' => 1,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
      ),
      array(
        'key' => 'field_5fd0f4f9bad70',
        'label' => 'Instagram',
        'name' => 'instagram',
        'type' => 'url',
        'instructions' => '',
        'required' => 1,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
      ),
      array(
        'key' => 'field_5fd0f512bad71',
        'label' => 'Linkedin',
        'name' => 'linkedin',
        'type' => 'url',
        'instructions' => '',
        'required' => 1,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
      ),
      array(
        'key' => 'field_5fd0f51cbad72',
        'label' => 'Whatsapp',
        'name' => 'whatsapp',
        'type' => 'text',
        'instructions' => 'Insira neste exato padrão: DDD + CodÁrea + Número, exemplo: 5513988000000',
        'required' => 1,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_5fd0f5afbad73',
        'label' => 'Email',
        'name' => 'email',
        'type' => 'email',
        'instructions' => '',
        'required' => 1,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
      ),
      array(
        'key' => 'field_5fd0f5b9bad74',
        'label' => 'Telefone',
        'name' => 'telefone',
        'type' => 'text',
        'instructions' => '',
        'required' => 1,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_5fd0f5cdbad75',
        'label' => 'Endereço',
        'name' => 'endereco',
        'type' => 'text',
        'instructions' => 'Endereço da empresa',
        'required' => 1,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'information',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => array(
      0 => 'permalink',
      1 => 'the_content',
      2 => 'excerpt',
      3 => 'discussion',
      4 => 'comments',
      5 => 'revisions',
      6 => 'slug',
      7 => 'author',
      8 => 'format',
      9 => 'page_attributes',
      10 => 'featured_image',
      11 => 'categories',
      12 => 'tags',
      13 => 'send-trackbacks',
    ),
    'active' => true,
    'description' => '',
  ));

endif;