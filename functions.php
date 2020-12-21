<?php
// Menus dinâmicos
function ecovila_register_menus()
{
  register_nav_menus(
    array(
      'header_menu' => __('Sitemap - Cabeçalho'),
      'footer_menu_nav' => __('Sitemap - Rodapé'),
    )
  );
}

// Informações da empresa
function ecovila_register_information()
{
  register_post_type(
    'information',
    array(
      'labels' => array(
        'name' => __('Sobre a empresa'),
        'add_new' => __('Adicionar informações'),
      ),

      'public' => true,
      'has_archive' => false,
      'menu_icon' => 'dashicons-info',
      'supports' => array('title', 'page-attributes'),
    )
  );
}

// Recursos no site
function ecovila_add_resources()
{
  add_theme_support('custom-logo');
  add_theme_support('post-thumbnails');
}

// Banner
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

// Notícias
function ecovila_register_blog()
{
  //O $post_type deve ficar em português por conta do slug
  register_post_type(
    'blog',
    array(
      'labels' => array(
        'name' => __('Blog'),
        'singular_name' => __('Blog'),
        'add_new' => __('Cadastrar nova notícia'),
      ),

      'public' => true,
      'has_archive' => false,
      'menu_icon' => 'dashicons-align-left',
      'supports' => array('title', 'page-attributes', 'author', 'thumbnail', 'editor', 'excerpt'),
      'taxonomies' => array('category', 'post_tag'),
      'show_in_rest' => true,
    )
  );
}

// Serviços
function ecovila_register_service()
{
  //O $post_type deve ficar em português por conta do slug
  register_post_type(
    'servico',
    array(
      'labels' => array(
        'name' => __('Serviços'),
        'singular_name' => __('Serviço'),
        'add_new' => __('Novo serviço'),
      ),

      'public' => true,
      'has_archive' => false,
      'menu_icon' => 'dashicons-hammer',
      'supports' => array('title', 'page-attributes', 'thumbnail'),
    )
  );
}

// Casas
function ecovila_register_house()
{
  //O $post_type deve ficar em português por conta do slug
  register_post_type(
    'casa',
    array(
      'labels' => array(
        'name' => __('Casas'),
        'singular_name' => __('Casa'),
        'add_new' => __('Nova casa'),
      ),

      'public' => true,
      'has_archive' => false,
      'menu_icon' => 'dashicons-admin-multisite',
      'supports' => array('title', 'page-attributes', 'thumbnail'),
    )
  );
}

// Depoimentos
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

// Parceiros
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
      'menu_icon' => 'dashicons-groups',
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

// Limpando o painel administrativo
function ecovila_remove_menu_pages()
{
  remove_menu_page('edit.php'); //Posts
  remove_menu_page('edit-comments.php'); //Comments 
};

//Alterando o tamanho do excerpt do post em caracteres
function ecovila_wpdocs_custom_excerpt_length($length)
{
  return 30;
}

//Função que permite paginação de custom posts
function ecovila_pagination($query)
{
  //Se tiver apenas 1 pagina de resultados, nao imprimir
  if ($query->max_num_pages < 2) {
    return;
  }

  $paged        = get_query_var('paged') ? intval(get_query_var('paged')) : 1;
  $pagenum_link = html_entity_decode(get_pagenum_link());
  $query_args   = array();
  $url_parts    = explode('?', $pagenum_link);

  if (isset($url_parts[1])) {
    wp_parse_str($url_parts[1], $query_args);
  }

  $pagenum_link = remove_query_arg(array_keys($query_args), $pagenum_link);
  $pagenum_link = trailingslashit($pagenum_link) . '%_%';

  $format  = $GLOBALS['wp_rewrite']->using_index_permalinks() && !strpos($pagenum_link, 'index.php') ? 'index.php/' : '';
  $format .= $GLOBALS['wp_rewrite']->using_permalinks() ? user_trailingslashit('page/%#%', 'paged') : '?paged=%#%';

  // Criar os links.
  $links = paginate_links(array(
    'base'     => $pagenum_link,
    'format'   => $format,
    'total'    => $query->max_num_pages,
    'current'  => $paged,
    'mid_size' => 3,
    'add_args' => array_map('urlencode', $query_args),
    'prev_text' => __('<i class="fas fa-long-arrow-alt-left"></i>'),
    'next_text' => __('<i class="fas fa-long-arrow-alt-right"></i>'),
    'type'      => 'list',
  ));

  $paginador = "";
  if ($links) :
    $paginador .= '<nav class="pagination" aria-label="Navegação de página">';
    $paginador .= $links;
    $paginador .= '</nav>';
  endif;

  return $paginador;
}

//Registrando as funções
add_action('init', 'ecovila_register_service');
add_action('init', 'ecovila_add_resources');
add_action('init', 'ecovila_register_banner');
add_action('init', 'ecovila_register_testimony');
add_action('init', 'ecovila_register_menus');
add_action('init', 'ecovila_register_information');
add_action('init', 'ecovila_register_partners');
add_action('init', 'ecovila_register_blog');
add_action('init', 'ecovila_register_house');
add_action('init', 'ecovila_register_house');
add_action('init', 'ecovila_pagination');
add_filter('admin_footer_text', 'ecovila_custom_footer_admin');
add_filter('get_custom_logo', 'ecovila_change_logo_class');
add_action('admin_menu', 'ecovila_remove_menu_pages');
add_filter('excerpt_length', 'ecovila_wpdocs_custom_excerpt_length', 999);

//ADVANCED CUSTOM FIELDS --------------------------------->