<?php
//Menus dinâmicos
function register_my_menus()
{
    register_nav_menus(
        array(
            'header_menu' => __('Sitemap - Cabeçalho'),
            'footer_menu_nav' => __('Sitemap - Rodapé'),
        )
    );
}

//Informações da empresa
function register_information()
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

// Customizar o Footer do WordPress
function custom_footer_admin()
{
    echo 'Criado por <a href="https://jtpsolution.com.br/">JTP Solution</a>';
}

//Registrando as funções
add_action('init', 'register_my_menus');
add_action('init', 'register_information');
add_filter('admin_footer_text', 'custom_footer_admin');