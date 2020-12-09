<section class="brands">
  <h2>Marcas que colaboram com o sucesso da Ecovila</h2>
  <div class="divider"></div>

  <div class="swiper-container-brands">
    <div class="brands-container">
      <div class="swiper-container">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">

          <?php
          $loop = new WP_Query(array(
            'post_type' => 'slider_partners',
          ));
          while ($loop->have_posts()) : $loop->the_post();
          ?>
          <!-- Slides -->
          <div class="swiper-slide">
            <img src="<?= the_field('logo'); ?>">
          </div>

          <?php endwhile; ?>
          <?php wp_reset_query(); ?>
        </div>
      </div>
    </div>
  </div>
</section>