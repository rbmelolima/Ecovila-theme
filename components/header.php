<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
  <meta name="author" content="Roger Bernardo de Melo Lima | JTP Solution">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta name="keywords" content="<?php bloginfo('tags'); ?>">
  <link rel="shortcut icon" href="" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700;900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/libs/font-awesome/css/all.min.css" rel="preload" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/libs/swiper/swiper.min.css" rel="preload" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/styles/css/style.css" rel="preload">
  <title><?php bloginfo('name'); ?></title>
</head>

<?php
$FACEBOOK;
$INSTAGRAM;
$LINKEDIN;
$WHATSAPP;
$TELEFONE;
$EMAIL;
$ENDERECO;

$loop = new WP_Query(array(
  'post_type' => 'information',
  'posts_per_page' => 1,
  'order' => 'ASC',
));
while ($loop->have_posts()) :  $loop->the_post();
  $FACEBOOK = get_field('facebook');
  $INSTAGRAM = get_field('instagram');
  $LINKEDIN = get_field('linkedin');
  $WHATSAPP = get_field('whatsapp');
  $TELEFONE = get_field('telefone');
  $EMAIL = get_field('email');
  $ENDERECO = get_field('endereco');
endwhile;
wp_reset_query();
?>