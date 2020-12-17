<?php
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
        'key' => 'field_5fd938d9c9145',
        'label' => 'Diferenciais',
        'name' => 'diferenciais',
        'type' => 'wysiwyg',
        'instructions' => '',
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
