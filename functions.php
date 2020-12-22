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
  $format .= $GLOBALS['wp_rewrite']->using_permalinks() ? user_trailingslashit('?paged=%#%', 'paged') : 'page/%#%';

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

function remove_page_from_query_string($query_string)
{
  if ($query_string['name'] == 'page' && isset($query_string['page'])) {
    unset($query_string['name']);
    $query_string['paged'] = $query_string['page'];
  }
  return $query_string;
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
add_filter('request', 'remove_page_from_query_string');

//Advanced Custom fields
if (function_exists('acf_add_local_field_group')) :
  acf_add_local_field_group(array(
    'key' => 'group_5fd910bde4220',
    'title' => 'Banner de destaque',
    'fields' => array(
      array(
        'key' => 'field_5fd910da2c67d',
        'label' => 'Imagem de fundo',
        'name' => 'imagem',
        'type' => 'image',
        'instructions' => 'Insira a imagem de fundo do slide.',
        'required' => 1,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'return_format' => 'url',
        'preview_size' => 'medium',
        'library' => 'all',
        'min_width' => '',
        'min_height' => '',
        'min_size' => '',
        'max_width' => '',
        'max_height' => '',
        'max_size' => '',
        'mime_types' => '',
      ),
      array(
        'key' => 'field_5fd911272c67e',
        'label' => 'Conteúdo do slide',
        'name' => 'conteudo',
        'type' => 'wysiwyg',
        'instructions' => 'Insira um texto curto e chamativo, e se sentir necessidade, um link. Não coloque nada além disso, ok?',
        'required' => 1,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'tabs' => 'all',
        'toolbar' => 'full',
        'media_upload' => 0,
        'delay' => 0,
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'slider_banner',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
  ));

  acf_add_local_field_group(array(
    'key' => 'group_5fd937ff41f15',
    'title' => 'Casas',
    'fields' => array(
      array(
        'key' => 'field_5fd93842c9143',
        'label' => 'Conteúdo 1',
        'name' => 'conteudo_1',
        'type' => 'wysiwyg',
        'instructions' => 'Insira o conteúdo da página. Esse bloco virá imediatamente após a imagem de destaque da casa. A sugestão de uso é um título (h1), um subtítulo (h2), e um separador (hr).
  Caso queira colocar links, coloque no fim do conteúdo, sozinho, pois o mesmo ficará centralizado na tela.',
        'required' => 1,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'tabs' => 'all',
        'toolbar' => 'full',
        'media_upload' => 1,
        'delay' => 0,
      ),
      array(
        'key' => 'field_5fd94ff72a129',
        'label' => 'Código de incorporação de vídeo',
        'name' => 'cod_video',
        'type' => 'text',
        'instructions' => 'Caso queria colocar um vídeo do Youtube, copie e cole neste campo o código de incorporação de vídeo.',
        'required' => 0,
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
        'key' => 'field_5fda9e759e742',
        'label' => 'Galeria de fotos',
        'name' => 'galeria_de_fotos',
        'type' => 'photo_gallery',
        'instructions' => 'Insira algumas fotos desta casa.',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'fields[galeria_de_fotos' => array(
          'edit_modal' => 'Default',
          'images_limit' => '10',
        ),
        'edit_modal' => 'Default',
      ),
      array(
        'key' => 'field_5fd939dec9148',
        'label' => 'Conteúdo da chamada de destaque',
        'name' => 'conteudo_cta',
        'type' => 'wysiwyg',
        'instructions' => 'Para criar a chamada de destaque, coloque um ícone seguido de um título e um link.',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'tabs' => 'all',
        'toolbar' => 'full',
        'media_upload' => 1,
        'delay' => 0,
      ),
      array(
        'key' => 'field_5fd93a0dc9149',
        'label' => 'Imagem da chamada de destaque',
        'name' => 'img_cta',
        'type' => 'image',
        'instructions' => 'Insira uma imagem para o background da chamada de destaque.',
        'required' => 1,
        'conditional_logic' => array(
          array(
            array(
              'field' => 'field_5fd939dec9148',
              'operator' => '!=empty',
            ),
          ),
        ),
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'return_format' => 'url',
        'preview_size' => 'medium',
        'library' => 'all',
        'min_width' => '',
        'min_height' => '',
        'min_size' => '',
        'max_width' => '',
        'max_height' => '',
        'max_size' => '',
        'mime_types' => '',
      ),
      array(
        'key' => 'field_5fdd14e36cddf',
        'label' => 'Diferencial 1',
        'name' => 'diferencial_1',
        'type' => 'wysiwyg',
        'instructions' => '(1) Insira um diferencial da casa. Uma imagem (200px x 200px) e um título embaixo.',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'tabs' => 'all',
        'toolbar' => 'full',
        'media_upload' => 1,
        'delay' => 0,
      ),
      array(
        'key' => 'field_5fdd153a2c196',
        'label' => 'Diferencial 2',
        'name' => 'diferencial_2',
        'type' => 'wysiwyg',
        'instructions' => '(2) Insira um diferencial da casa. Uma imagem (200px x 200px) e um título embaixo.',
        'required' => 0,
        'conditional_logic' => array(
          array(
            array(
              'field' => 'field_5fdd14e36cddf',
              'operator' => '!=empty',
            ),
          ),
        ),
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'tabs' => 'all',
        'toolbar' => 'full',
        'media_upload' => 1,
        'delay' => 0,
      ),
      array(
        'key' => 'field_5fdd15632c197',
        'label' => 'Diferencial 3',
        'name' => 'diferencial_3',
        'type' => 'wysiwyg',
        'instructions' => '(3) Insira um diferencial da casa. Uma imagem (200px x 200px) e um título embaixo.',
        'required' => 0,
        'conditional_logic' => array(
          array(
            array(
              'field' => 'field_5fdd153a2c196',
              'operator' => '!=empty',
            ),
          ),
        ),
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'tabs' => 'all',
        'toolbar' => 'full',
        'media_upload' => 1,
        'delay' => 0,
      ),
      array(
        'key' => 'field_5fdd15822c198',
        'label' => 'Diferencial 4',
        'name' => 'diferencial_4',
        'type' => 'wysiwyg',
        'instructions' => '(4) Insira um diferencial da casa. Uma imagem (200px x 200px) e um título embaixo.',
        'required' => 0,
        'conditional_logic' => array(
          array(
            array(
              'field' => 'field_5fdd15632c197',
              'operator' => '!=empty',
            ),
          ),
        ),
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'tabs' => 'all',
        'toolbar' => 'full',
        'media_upload' => 1,
        'delay' => 0,
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'casa',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
  ));

  acf_add_local_field_group(array(
    'key' => 'group_5fd9120abc0eb',
    'title' => 'Depoimentos',
    'fields' => array(
      array(
        'key' => 'field_5fd9121f9eda0',
        'label' => 'Imagem',
        'name' => 'imagem',
        'type' => 'image',
        'instructions' => 'Insira uma imagem da pessoa que estará fazendo o depoimento',
        'required' => 1,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'return_format' => 'url',
        'preview_size' => 'medium',
        'library' => 'all',
        'min_width' => '',
        'min_height' => '',
        'min_size' => '',
        'max_width' => '',
        'max_height' => '',
        'max_size' => '',
        'mime_types' => '',
      ),
      array(
        'key' => 'field_5fd912789eda2',
        'label' => 'Conteúdo do depoimento',
        'name' => 'depoimento',
        'type' => 'wysiwyg',
        'instructions' => 'Escreva o depoimento da pessoa aqui',
        'required' => 1,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'tabs' => 'all',
        'toolbar' => 'full',
        'media_upload' => 0,
        'delay' => 0,
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'depoimentos',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
  ));

  acf_add_local_field_group(array(
    'key' => 'group_5fd911c40679b',
    'title' => 'Parceiros',
    'fields' => array(
      array(
        'key' => 'field_5fd911e21eb32',
        'label' => 'Logo',
        'name' => 'logo',
        'type' => 'image',
        'instructions' => 'Insira o logo do seu parceiro',
        'required' => 1,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'return_format' => 'url',
        'preview_size' => 'medium',
        'library' => 'all',
        'min_width' => '',
        'min_height' => '',
        'min_size' => '',
        'max_width' => '',
        'max_height' => '',
        'max_size' => '',
        'mime_types' => '',
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'slider_partners',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
  ));

  acf_add_local_field_group(array(
    'key' => 'group_5fd93a7852f8c',
    'title' => 'Serviços',
    'fields' => array(
      array(
        'key' => 'field_5fd93a78cdfac',
        'label' => 'Conteúdo 1',
        'name' => 'conteudo_1',
        'type' => 'wysiwyg',
        'instructions' => 'Insira o conteúdo da página. Esse bloco virá imediatamente após a imagem de destaque da casa. A sugestão de uso é um título (h1), um subtítulo (h2), e um separador (hr).
  Caso queira colocar links, coloque no fim do conteúdo, sozinho, pois o mesmo ficará centralizado na tela.',
        'required' => 1,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'tabs' => 'all',
        'toolbar' => 'full',
        'media_upload' => 1,
        'delay' => 0,
      ),
      array(
        'key' => 'field_5fd93a78d1a41',
        'label' => 'Galeria de fotos',
        'name' => 'galeria_de_fotos',
        'type' => 'photo_gallery',
        'instructions' => 'Insira algumas fotos referentes a esse serviço.',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'fields[galeria_de_fotos' => array(
          'edit_modal' => 'Default',
          'images_limit' => '10',
        ),
        'edit_modal' => 'Default',
      ),
      array(
        'key' => 'field_5fdb994c5e2a0',
        'label' => 'Conteúdo 2',
        'name' => 'conteudo_2',
        'type' => 'wysiwyg',
        'instructions' => 'Insira o conteúdo da página. Esse bloco virá imediatamente após a galeria de fotos. A sugestão de uso é um título (h1), um subtítulo (h2), e um separador (hr).
  Caso queira colocar links, coloque no fim do conteúdo, sozinho, pois o mesmo ficará centralizado na tela.',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'tabs' => 'all',
        'toolbar' => 'full',
        'media_upload' => 1,
        'delay' => 0,
      ),
      array(
        'key' => 'field_5fdb980cc2514',
        'label' => 'Código de incorporação de vídeo',
        'name' => 'cod_video',
        'type' => 'text',
        'instructions' => 'Caso queria colocar um vídeo do Youtube, copie e cole neste campo o código de incorporação de vídeo.',
        'required' => 0,
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
        'key' => 'field_5fd93a78d8fa4',
        'label' => 'Conteúdo da chamada de destaque',
        'name' => 'conteudo_cta',
        'type' => 'wysiwyg',
        'instructions' => 'Para criar a chamada de destaque, coloque um ícone seguido de um título e um link.',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'tabs' => 'all',
        'toolbar' => 'full',
        'media_upload' => 1,
        'delay' => 0,
      ),
      array(
        'key' => 'field_5fd93a78dcad8',
        'label' => 'Imagem da chamada de destaque',
        'name' => 'img_cta',
        'type' => 'image',
        'instructions' => 'Insira uma imagem para o background da chamada de destaque.',
        'required' => 1,
        'conditional_logic' => array(
          array(
            array(
              'field' => 'field_5fd93a78d8fa4',
              'operator' => '!=empty',
            ),
          ),
        ),
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'return_format' => 'url',
        'preview_size' => 'medium',
        'library' => 'all',
        'min_width' => '',
        'min_height' => '',
        'min_size' => '',
        'max_width' => '',
        'max_height' => '',
        'max_size' => '',
        'mime_types' => '',
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'servico',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
  ));

  acf_add_local_field_group(array(
    'key' => 'group_5fd90f6590a04',
    'title' => 'Sobre a empresa',
    'fields' => array(
      array(
        'key' => 'field_5fdbece61c73e',
        'label' => 'Sobre',
        'name' => 'sobre',
        'type' => 'wysiwyg',
        'instructions' => 'Descreva aqui um pouco sobre o condomínio. 
  Forma correta: 
  - Um título (h1)
  - Subtítulo (h2)
  - Separador (hr)
  - Texto corrido (p)',
        'required' => 1,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'tabs' => 'all',
        'toolbar' => 'full',
        'media_upload' => 0,
        'delay' => 0,
      ),
      array(
        'key' => 'field_5fd90f6b73549',
        'label' => 'Facebook',
        'name' => 'facebook',
        'type' => 'url',
        'instructions' => 'Insira o link do Facebook da empresa.',
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
        'key' => 'field_5fd90f9a7354a',
        'label' => 'Instagram',
        'name' => 'instagram',
        'type' => 'url',
        'instructions' => 'Insira o link do Instagram da empresa.',
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
        'key' => 'field_5fd90fb07354b',
        'label' => 'Linkedin',
        'name' => 'linkedin',
        'type' => 'url',
        'instructions' => 'Insira o link do Linkedin da empresa.',
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
        'key' => 'field_5fd90fc07354c',
        'label' => 'Whatsapp',
        'name' => 'whatsapp',
        'type' => 'text',
        'instructions' => 'Insira número de celular da empresa. Ex.: 13912345678',
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
        'maxlength' => 11,
      ),
      array(
        'key' => 'field_5fd910377354d',
        'label' => 'Email',
        'name' => 'email',
        'type' => 'email',
        'instructions' => 'Insira o email da empresa.',
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
        'key' => 'field_5fd9104f7354e',
        'label' => 'Telefone',
        'name' => 'telefone',
        'type' => 'text',
        'instructions' => 'Insira o telefone da empresa',
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
        'key' => 'field_5fd910917354f',
        'label' => 'Endereço',
        'name' => 'endereco',
        'type' => 'text',
        'instructions' => 'Insira o endereço da empresa',
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
        'key' => 'field_5fdbed391c73f',
        'label' => 'Galeria de fotos',
        'name' => 'galeria_de_fotos',
        'type' => 'photo_gallery',
        'instructions' => 'Insira imagens do condomínio',
        'required' => 1,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'fields[galeria_de_fotos' => array(
          'edit_modal' => 'Default',
          'images_limit' => '',
        ),
        'edit_modal' => 'Default',
      ),
      array(
        'key' => 'field_5fdbed831c740',
        'label' => 'Call to actions',
        'name' => 'call_to_actions',
        'type' => 'wysiwyg',
        'instructions' => 'Insira alguns links para ser usados como call to actions.',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'tabs' => 'all',
        'toolbar' => 'full',
        'media_upload' => 0,
        'delay' => 0,
      ),
      array(
        'key' => 'field_5fdbeda41c741',
        'label' => 'Diferencial 1',
        'name' => 'diferencial_1',
        'type' => 'wysiwyg',
        'instructions' => '(1) Insira um diferencial da sua empresa. Uma imagem (200px x 200px) e um título embaixo.',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'tabs' => 'all',
        'toolbar' => 'full',
        'media_upload' => 1,
        'delay' => 0,
      ),
      array(
        'key' => 'field_5fdbede71c742',
        'label' => 'Diferencial 2',
        'name' => 'diferencial_2',
        'type' => 'wysiwyg',
        'instructions' => '(2) Insira um diferencial da sua empresa. Uma imagem (200px x 200px) e um título embaixo.',
        'required' => 0,
        'conditional_logic' => array(
          array(
            array(
              'field' => 'field_5fdbeda41c741',
              'operator' => '!=empty',
            ),
          ),
        ),
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'tabs' => 'all',
        'toolbar' => 'full',
        'media_upload' => 1,
        'delay' => 0,
      ),
      array(
        'key' => 'field_5fdbee091c743',
        'label' => 'Diferencial 3',
        'name' => 'diferencial_3',
        'type' => 'wysiwyg',
        'instructions' => '(3) Insira um diferencial da sua empresa. Uma imagem (200px x 200px) e um título embaixo.',
        'required' => 0,
        'conditional_logic' => array(
          array(
            array(
              'field' => 'field_5fdbede71c742',
              'operator' => '!=empty',
            ),
          ),
        ),
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'tabs' => 'all',
        'toolbar' => 'full',
        'media_upload' => 1,
        'delay' => 0,
      ),
      array(
        'key' => 'field_5fdbee1c1c744',
        'label' => 'Diferencial 4',
        'name' => 'diferencial_4',
        'type' => 'wysiwyg',
        'instructions' => '(2) Insira um diferencial da sua empresa. Uma imagem (200px x 200px) e um título embaixo.',
        'required' => 0,
        'conditional_logic' => array(
          array(
            array(
              'field' => 'field_5fdbee091c743',
              'operator' => '!=empty',
            ),
          ),
        ),
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'tabs' => 'all',
        'toolbar' => 'full',
        'media_upload' => 1,
        'delay' => 0,
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
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
  ));

endif;
