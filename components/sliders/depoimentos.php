<section class="testimony">
  <h2>Opinião de quem investiu, de quem comprou</h2>
  <div class="divider"></div>

  <div class="swiper-container-testimony">
    <div class="swiper-container">
      <div class="swiper-button-prev top"><i class="fas fa-long-arrow-alt-left"></i></div>
      <div class="swiper-button-next top"><i class="fas fa-long-arrow-alt-right"></i></div>

      <div class="swiper-wrapper">
        <?php
        $loop = new WP_Query(array(
          'post_type' => 'depoimentos',
        ));
        while ($loop->have_posts()) : $loop->the_post();
        ?>

          <div class="swiper-slide">
            <div class="container-testimony">
              <div class="quotes">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/quotes.png" class="img-fluid" />
              </div>

              <div class="img-testimony">
                <img src="<?php the_field('imagem'); ?>" class="img-fluid" />
              </div>
              <h3><?php the_field('nome'); ?></h3>
              <p><?php the_field('depoimento'); ?></p>
              <?php if (get_field('link') != null || get_field('link') != '') : ?>
                <a href="<?php get_field('link') ?>" target="_blank" rel="noopener">Acessar o vídeo</a>
              <?php endif; ?>
            </div>
          </div>

        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
      </div>

      <div class="swiper-button-prev"><i class="fas fa-long-arrow-alt-left"></i></div>
      <div class="swiper-button-next"><i class="fas fa-long-arrow-alt-right"></i></div>
    </div>
  </div>
</section>