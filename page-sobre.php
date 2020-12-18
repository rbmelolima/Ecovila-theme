<?php require_once 'components/header.php'; ?>

<?php
$content;
$images;
$ctas;
$differential1;
$differential2;
$differential3;
$differential4;

$loop = new WP_Query(array(
  'post_type' => 'information',
  'posts_per_page' => 1,
  'order' => 'ASC',
));
while ($loop->have_posts()) :  $loop->the_post();
  $content = get_field('sobre');
  $images = acf_photo_gallery('galeria_de_fotos', get_the_ID());
  $ctas = get_field('call_to_actions');
  $differential1 = get_field('diferencial_1');
  $differential2 = get_field('diferencial_2');
  $differential3 = get_field('diferencial_3');
  $differential4 = get_field('diferencial_4');
endwhile;
wp_reset_query();
?>

<body id="page-about">
  <?php require_once 'components/menu.php'; ?>

  <?php
  $url = get_the_post_thumbnail_url(null, 'post-thumbnail');
  ?>

  <div class="section-cover" style="background-image: url(<?= $url ?>);">
    <div class="overlay">
      <?php the_title('<h1>', '</h1>'); ?>
    </div>
  </div>

  <section class="section-description">
    <?= $content ?>
  </section>

  <section class="section-gallery">
    <h2> Confira algumas imagens!</h2>
    <div class="divider"></div>

    <div class="swiper-container-gallery">
      <!-- Slider main container -->
      <div class="swiper-container">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <?php
          foreach ($images as $image) :
          ?>
            <div class="swiper-slide" style="background-image: url(<?= $image['full_image_url'] ?>);">
            </div>
          <?php endforeach; ?>
        </div>
        <!-- navigation buttons -->
        <div class="swiper-button-prev"><i class="fas fa-long-arrow-alt-left"></i></div>
        <div class="swiper-button-next"><i class="fas fa-long-arrow-alt-right"></i></div>
      </div>
    </div>
  </section>

  <section class="section-differentials">
    <h2> Nossos diferenciais</h2>
    <div class="divider"></div>

    <div class="content">
      <?php if ($differential1 != null) : ?>
        <article>
          <?= $differential1 ?>
        </article>
      <?php endif; ?>
      <?php if ($differential2 != null) : ?>
        <article>
          <?= $differential2 ?>
        </article>
      <?php endif; ?>
      <?php if ($differential3 != null) : ?>
        <article>
          <?= $differential3 ?>
        </article>
      <?php endif; ?>
      <?php if ($differential4 != null) : ?>
        <article>
          <?= $differential4 ?>
        </article>
      <?php endif; ?>
    </div>
  </section>


  <section class="ctas">
    <div class="wrapper">
      <?= $ctas ?>
    </div>
  </section>
</body>

<?php require_once 'components/footer.php'; ?>