<?php require_once 'components/header.php'; ?>

<body id="page-sobre">
  <?php require_once 'components/menu.php'; ?>

  <?php
  $url = get_the_post_thumbnail_url(null, 'post-thumbnail');
  ?>

  <div class="cover" style="background-image: url(<?= $url ?>);">
    <div class="overlay">
      <?php the_title('<h1>', '</h1>'); ?>
    </div>
  </div>

  <section class="section-description">
    <?php the_content(); ?>
  </section>
</body>

<?php require_once 'components/footer.php'; ?>