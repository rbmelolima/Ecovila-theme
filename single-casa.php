<?php require_once 'components/header.php'; ?>

<body id="page-house">
  <?php require_once 'components/menu.php'; ?>

  <main>
    <?php $url_cover = get_the_post_thumbnail_url(null, 'post-thumbnail'); ?>

    <div class="cover" style="background-image: url(<?= $url_cover ?>);">
      <div class="overlay">
        <?php the_title('<h1>', '</h1>'); ?>
      </div>
    </div>

    <section class="section-description">
      <?= the_field('conteudo_1'); ?>

      <?php if (get_field('link_video') != null) : ?>
        <div class="iframe-container">
          <iframe src="<?= the_field('link_video') ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      <?php endif; ?>
    </section>
  </main>

</body>

<?php require_once 'components/footer.php'; ?>