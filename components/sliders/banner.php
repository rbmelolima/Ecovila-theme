<section class="banner">
  <div class="swiper-container swiper-container-banner">
    <div class="swiper-wrapper">
      <?php
      $loop = new WP_Query(array(
        'post_type' => 'slider_banner',
        'order' => 'ASC',
      ));
      while ($loop->have_posts()) : $loop->the_post();
      ?>
        <!-- Slides -->
        <div class="swiper-slide" style="background-image: url(<?php the_field('imagem'); ?>)">
          <div class="filter-black"></div>
          <div class="content">
            <div class="text">
              <?php the_field('conteudo'); ?>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
      <?php wp_reset_query(); ?>
    </div>
  </div>
</section>