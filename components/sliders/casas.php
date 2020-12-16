<section class="section-highlight">
  <h1>As Casas</h1>
  <h2>
    Projetos que proporcionam qualidade de vida com sustentabilidade e conforto. São 4 modelos diferentes. Um deles
    na medida certa para você e toda sua família.
  </h2>

  <div class="divider"></div>

  <div class="swiper-container-highlight">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <?php
        $loop = new WP_Query(array(
          'post_type' => 'casa',
        ));

        while ($loop->have_posts()) : $loop->the_post();
        ?>

          <a href="<?= the_permalink(); ?>" class="swiper-slide" style="background-image: url(<?= get_the_post_thumbnail_url(null, 'post-thumbnail'); ?>);">
            <div class="filter-green"></div>
            <div class="label">
              <h4><?= the_title(); ?></h4>
            </div>
          </a>

        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
      </div>
      <div class="swiper-button-prev">
        <i class="fas fa-long-arrow-alt-left"></i>
      </div>
      <div class="swiper-button-next">
        <i class="fas fa-long-arrow-alt-right"></i>
      </div>
    </div>
</section>