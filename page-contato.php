<?php require_once 'components/header.php'; ?>

<body id="page-contact">
  <?php require_once 'components/menu.php'; ?>

  <?php
  $url = get_the_post_thumbnail_url(null, 'post-thumbnail');
  ?>

  <main>
    <div class="cover" style="background-image: url(<?= $url ?>);">
      <div class="overlay">
        <h1>Entre em contato</h1>
      </div>
    </div>

    <section class="channels">
      <h2>Contate-nos, estamos ansiosos para conversar com você!</h2>
      <div class="divider"></div>

      <div class="channels-container">
        <article>
          <img src="<?php bloginfo('template_url'); ?>/assets/icons/meeting-point.png" alt="">
          <h3>Onde estamos</h3>
          <p><?= $ENDERECO ?></p>
        </article>

        <article>
          <img src="<?php bloginfo('template_url'); ?>/assets/icons/email.png" alt="">
          <h3>Email</h3>
          <p><?= $EMAIL ?></p>
        </article>

        <article>
          <img src="<?php bloginfo('template_url'); ?>/assets/icons/smartphone.png" alt="">
          <h3>Telefone</h3>
          <p><?= $WHATSAPP ?></p>
          <p><?= $TELEFONE ?></p>
        </article>
      </div>
    </section>

    <section class="form-contact">
      <h2>Escreva-nos!</h2>
      <div class="divider"></div>

      <form action="" method="POST" autocomplete="on" class="contact-form">
        <div class="input-block-col-3">
          <div class="input-block">
            <label for="USER_NAME">Nome</label>
            <input type="text" name="USER_NAME" id="" placeholder="Nome completo">
          </div>

          <div class="input-block">
            <label for="USER_EMAIL">Email</label>
            <input type="email" name="USER_EMAIL" id="" placeholder="email@exemplo.com">
          </div>

          <div class="input-block">
            <label for="USER_TEL">Telefone</label>
            <input type="tel" name="USER_TEL" id="" placeholder="99 999999999 ">
          </div>
        </div>

        <div class="input-block-col-3">
          <div class="input-block">
            <label for="USER_CONTACT_FORM">Como prefere ser contatado? </label>
            <select name="USER_CONTACT_FORM" id="">
              <option value="-1" selected disabled>Selecione uma opção</option>
              <option value="">Email</option>
              <option value="">Telefone</option>
            </select>
          </div>

          <div class="input-block">
            <label for="QUESTION">Como nos conheceu?</label>
            <select name="QUESTION" id="">
              <option value="-1" selected disabled>Selecione uma opção</option>
              <option value="">Google</option>
              <option value="">Facebook</option>
            </select>
          </div>

          <div class="input-block">
            <label for="SUBJECT">Assunto</label>
            <input type="text" name="SUBJECT" id="" placeholder="Ex.: Orçamento">
          </div>
        </div>

        <div class="input-block">
          <label for="MESSAGE">Mensagem</label>
          <input type="text" name="MESSAGE" placeholder="Escreva aqui sua mensagem...">
        </div>

        <button type="submit">
          Enviar
          <i class="fas fa-long-arrow-alt-right"></i>
        </button>
      </form>
    </section>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3643.963538726037!2d-46.4959301844894!3d-24.03235088503985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce1fa0b7f16a97%3A0x14a4ab255ea7411e!2sResidencial%20EcoVila!5e0!3m2!1spt-BR!2sbr!4v1604607756740!5m2!1spt-BR!2sbr" height="450" frameborder="0" width="100%" allowfullscreen="" aria-hidden="false" tabindex="0">
    </iframe>
</body>

<?php require_once 'components/footer.php'; ?>