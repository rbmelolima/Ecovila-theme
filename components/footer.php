<div id="sitemap">
  <div class="section-sitemap logo">
    <?php the_custom_logo(); ?>
  </div>

  <div class="section-sitemap pages">
    <nav>
      <?php
      wp_nav_menu(
        array('theme_location' => 'footer_menu_nav')
      );
      ?>
    </nav>
  </div>

  <div class="section-sitemap houses">
    <?php
    $loop = new WP_Query(array(
      'post_type' => 'casa',
    ));

    while ($loop->have_posts()) : $loop->the_post();
    ?>
      <a href="<?= the_permalink(); ?>" title="">
        <?= the_title(); ?>
      </a>

    <?php endwhile; ?>
    <?php wp_reset_query(); ?>
  </div>

  <div class="section-sitemap services">
    <nav>
      <?php
      $loop = new WP_Query(array(
        'post_type' => 'servico',
      ));

      while ($loop->have_posts()) : $loop->the_post();
      ?>
        <a href="<?= the_permalink(); ?>" title="">
          <?= the_title(); ?>
        </a>

      <?php endwhile; ?>
      <?php wp_reset_query(); ?>
    </nav>
  </div>

  <div class="section-sitemap contact">
    <span>
      <div class="icon">
        <i class="fas fa-map-marker-alt"></i>
      </div>
      <?= $ENDERECO ?>
    </span>
    <span>
      <div class="icon">
        <i class="fas fa-phone"></i>
      </div>
      <?= $TELEFONE ?>
    </span>
    <span>
      <div class="icon">
        <i class="fas fa-mobile"></i>
      </div>
      <?= $WHATSAPP ?>
    </span>
    <span>
      <div class="icon">
        <i class="fas fa-envelope"></i>
      </div>
      <?= $EMAIL ?>
    </span>
    <div class="social-media">
      <a href="<?= $FACEBOOK ?>" target="_blank" rel="noopener" title="Facebook"> <i class="fab fa-facebook-f"></i></a>
      <a href="<?= $INSTAGRAM ?>" target="_blank" rel="noopener" title="Instagram"> <i class="fab fa-instagram"></i></a>
      <a href="<?= $LINKEDIN ?>" target="_blank" rel="noopener" title="Linkedin"> <i class="fab fa-linkedin-in"></i></a>
    </div>
  </div>
</div>

<footer class="footer">
  <p>© <?= date('Y') ?> <strong>Ecovila Resort Residencial</strong> - Todos os direitos reservados</p>
</footer>

<script src="<?php bloginfo('template_url'); ?>/libs/jquery/jquery-3.4.1.js" rel="preload"></script>
<script src="<?php bloginfo('template_url'); ?>/libs/jquery/jquery.mask.min.js" rel="preload"></script>
<script src="<?php bloginfo('template_url'); ?>/libs/swiper/swiper.min.js" rel="preload"></script>
<script src="<?php bloginfo('template_url'); ?>/js/index.js" rel="preload"></script>
<script src="<?php bloginfo('template_url'); ?>/js/sliders.js" rel="preload"></script>