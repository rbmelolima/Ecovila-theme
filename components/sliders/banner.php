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
          <h1>
            <?php the_field('texto'); ?>
          </h1>

          <?php if (get_field('url_do_link') != null && get_field('texto_do_link') != null) : ?>
          <a href="<?php the_field('url_do_link'); ?>" class="button">
            <?php the_field('texto_do_link'); ?>
            <i class="fas fa-long-arrow-alt-right"></i>
          </a>
          <?php endif; ?>
        </div>

      </div>
      <?php endwhile; ?>
      <?php wp_reset_query(); ?>
    </div>
  </div>
</section>