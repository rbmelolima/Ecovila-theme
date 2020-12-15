<?php require_once 'components/header.php'; ?>

<body id="page-notice">
  <?php require_once 'components/menu.php'; ?>

  <main>
    <?php $url_cover = get_the_post_thumbnail_url(null, 'post-thumbnail'); ?>

    <div class="cover" style="background-image: url(<?= $url_cover ?>);">
      <div class="overlay">
        <span>Publicado em <?php the_date(); ?></span>
        <?php the_title('<h1>', '</h1>'); ?>
        <?php the_category(); ?>
      </div>
    </div>

    <div class="content">
      <?php the_content(); ?>

      <footer>
        <p>
          <?php echo get_avatar(the_author_meta('ID', 60)); ?>
        </p>
        <p>
          <?php the_author_meta('description'); ?>
        </p>
      </footer>

      <aside>
        <?php the_tags('', ' ', ''); ?>
      </aside>

      <div class="share">
        <a href="" title="Voltar"><i class="fas fa-long-arrow-alt-left"></i></a>
        <a href="" title="Compartilhar via Facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="" title="Compartilhar via Linkedin"><i class="fab fa-linkedin-in"></i></a>
      </div>
    </div>
  </main>
</body>

<?php require_once 'components/footer.php'; ?>