<div id="sitemap">
  <div class="section-sitemap logo">
    <?php the_custom_logo(); ?>
  </div>

  <div class="section-sitemap pages">
    <nav>
      <a href="index.html" title="">Início</a>
      <a href="sobre.html" title="">Ecovila Resort Residencial</a>
      <a href="http://" title="">Blog</a>
      <a href="contato.html" title="">Contato</a>
    </nav>
  </div>

  <div class="section-sitemap houses">
    <a href="http://" title="">Casa Eficiente</a>
    <a href="http://" title="">Tecnologia</a>
    <a href="http://" title="">2 suítes gar. p/ 2 carros</a>
    <a href="http://" title="">2 suítes gar. p/ 3 carros</a>
    <a href="http://" title="">2 suítes gar. p/ 4 carros</a>
    <a href="http://" title="">2 suítes gar. p/ 5 carros</a>
  </div>

  <div class="section-sitemap services">
    <nav>
      <a href="http://" title=""> Serviço </a>
      <a href="http://" title=""> Serviço </a>
      <a href="http://" title=""> Serviço </a>
      <a href="http://" title=""> Serviço </a>
      <a href="http://" title=""> Serviço </a>
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