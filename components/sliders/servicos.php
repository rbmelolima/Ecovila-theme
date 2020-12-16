<section class="section-highlight">
  <h1>Serviços oferecidos no Condomínio</h1>
  <h2> Um conceito de moradia que se preocupa com a qualidade de vida do Planeta </h2>

  <div class="divider"></div>

  <div class="swiper-container-highlight">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <?php
        $loop = new WP_Query(array(
          'post_type' => 'servico',
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