<?php require_once 'components/header.php'; ?>

<body id="page-notice">
  <?php require_once 'components/menu.php'; ?>

  <main>
    <?php $url_cover = get_the_post_thumbnail_url(null, 'post-thumbnail'); ?>

    <div class="cover" style="background-image: url(<?= $url_cover ?>);">
      <div class="overlay">
        <span>Publicado em 01/01/2021</span>
        <?php the_title('<h1>', '</h1>'); ?>
        <a href="">Nome da categoria</a>
      </div>
    </div>
  </main>
</body>

<?php require_once 'components/footer.php'; ?>