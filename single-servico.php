<?php require_once 'components/header.php'; ?>

<body>
  <?php require_once 'components/menu.php'; ?>
  <?php $url_cover = get_the_post_thumbnail_url(null, 'post-thumbnail'); ?>

  <div class="section-cover" style="background-image: url(<?= $url_cover ?>);">
    <div class="overlay">
      <?php the_title('<h1>', '</h1>'); ?>
    </div>
  </div>

  <section class="section-description">
    <?= the_field('conteudo_1'); ?>
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
          $images = acf_photo_gallery('galeria_de_fotos', get_the_ID());
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

  <section class="section-description">
    <?= the_field('conteudo_2'); ?>

    <?php if (get_field('cod_video') != null) : ?>
      <div class="iframe-container">
        <?= the_field('cod_video') ?>
      </div>
    <?php endif; ?>
  </section>

  <?php require_once 'components/sliders/casas.php'; ?>

  <?php require_once 'components/sliders/servicos.php'; ?>

  <?php if (get_field('conteudo_cta') != null) : ?>
    <section class="section-cta">
      <div class="image-cta" style="background-image: url(<?= the_field('img_cta'); ?>);">
        <div class="primary-box">
          <div class="second-box">
            <?= the_field('conteudo_cta'); ?>
          </div>
        </div>
      </div>
    </section>
  <?php endif; ?>

</body>

<?php require_once 'components/footer.php'; ?>