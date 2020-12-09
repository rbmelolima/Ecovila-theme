<nav id="menu-container">
  <div id="menu-button-toggle" onclick="toggleMenu()">
    <i class="fas fa-bars" id="menu-button-icon"></i>
  </div>

  <div>
    <?php the_custom_logo(); ?>
  </div>

  <div>
    <div class="social-links">
      <a href="<?= $FACEBOOK ?>" target="_blank" rel="noopener" title="Facebook"> <i class="fab fa-facebook-f"></i></a>
      <a href="<?= $INSTAGRAM ?>" target="_blank" rel="noopener" title="Instagram"> <i class="fab fa-instagram"></i></a>
      <a href="<?= $LINKEDIN ?>" target="_blank" rel="noopener" title="Linkedin"> <i class="fab fa-linkedin-in"></i></a>
    </div>
  </div>

  <div id="menu-container-overlay">
    <div class="wrapper">
      <ul>
        <li><a href="index.html">Início</a></li>
        <li><a href="sobre.html">Ecovila Resort Residencial</a></li>
        <li><a href="">Casa Eficiente</a></li>
        <li><a href="">Casas</a></li>
        <li><a href="">Serviços</a></li>
        <li><a href="">Blog</a></li>
        <li><a href="contato.html">Contato</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="contact-absolute">
  <div id="wrapper-contact-tel">
    <span id="phone-fixed-tel"><?= $TELEFONE ?></span>
    <a href="tel:13988282873" class="contact-phone" title="Telefone">
      <img src="<?php bloginfo('template_url'); ?>/assets/icons/phone.svg" />
    </a>
  </div>

  <div>
    <a href="mail:<?= $EMAIL ?>" target="_blank" rel="noopener" class="contact-google" title="Email">
      <img src="<?php bloginfo('template_url'); ?>/assets/icons/googleLogo.svg" />
    </a>
  </div>

  <div>
    <a href="https://api.whatsapp.com/send?phone=<?= $WHATSAPP ?>" class="contact-whatsapp" title="Whatsapp">
      <img src="<?php bloginfo('template_url'); ?>/assets/icons/whatsapp.svg" />
    </a>
  </div>
</div>