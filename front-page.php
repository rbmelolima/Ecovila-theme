<?php require_once 'components/header.php'; ?>

<body id="page-home">
  <?php require_once 'components/menu.php'; ?>

  <?php require_once 'components/sliders/banner.php'; ?>

  <?php require_once 'components/sliders/casas.php'; ?>

  <section class="section-description">
    <?= the_content(); ?>
  </section>

  <?php require_once 'components/sliders/servicos.php'; ?>

  <?php require_once 'components/sliders/depoimentos.php'; ?>

  <section class="architect">
    <div class="container-background">
      <div class="image" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/arquiteta.png');"></div>
      <div class="filter-blue">
        <div class="content">
          <h1>Palavra da arquiteta</h1>
        </div>
      </div>
    </div>

    <div class="container-text">
      <div class="center">
        <h2>Fruto de longa pesquisa, o projeto da Ecovila foi criado pela arquiteta Patrícia Gomes de Souza Soares.
        </h2>
        <div class="divider"></div>
        <cite>
          “Uma de minhas intenções foi aproveitar os amplos espaços das casas com o máximo cuidado. Dessa forma,
          conseguimos garantir privacidade, ao mesmo tempo em que mantivemos a integração que só um condomínio fechado
          como este pode oferecer”
        </cite>
      </div>
    </div>
  </section>

  <?php require_once 'components/ultimas-noticias.php'; ?>

  <?php require_once 'components/sliders/parceiros.php'; ?>

</body>

<?php require_once 'components/footer.php'; ?>