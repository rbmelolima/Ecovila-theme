<?php require_once 'components/header.php'; ?>

<body id="page-blog">
  <?php require_once 'components/menu.php'; ?>
  <?php
  $url = get_the_post_thumbnail_url(null, 'post-thumbnail');
  ?>

  <div class="section-cover" style="background-image: url(<?= $url ?>);">
    <div class="overlay">
      <?php the_title('<h1>', '</h1>'); ?>
    </div>
  </div>

  <div class="filters-container">
    <div class="submenu">
      <button onclick="active_submenu_with_click('submenu-content-categories')">Categorias <i class="fas fa-long-arrow-alt-down"></i></button>
      <div class="submenu-content" id="submenu-content-categories">
        <?php
        $args = array(
          'hide_empty'      => false,
        );
        $categories = get_categories($args);
        foreach ($categories as $category) :
          $category_link = get_category_link($category->term_id);
        ?>
          <a href="<?= $category_link ?>"><?= $category->name ?></a>
        <?php endforeach; ?>
      </div>
    </div>

    <div class="submenu">
      <button onclick="active_submenu_with_click('submenu-content-tags')">Tópicos <i class="fas fa-long-arrow-alt-down"></i></button>
      <div class="submenu-content" id="submenu-content-tags">
        <?php
        $tags = get_tags();
        foreach ($tags as $tag) :
          $tag_link = get_tag_link($tag->term_id);
        ?>
          <a href="<?= $tag_link ?>"><?= $tag->name ?></a>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

  <section class="blog-notices-container">
    <div class="blog-notices-container-wrapper">
      <?php
      //Base para filtros
      $category = isset($_GET['categoria']) ? $_GET['categoria'] : '';
      $tag = isset($_GET['topico']) ? $_GET['topico'] : '';
      $author = isset($_GET['autor']) ? $_GET['autor'] : '';

      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

      $loop = new WP_Query(array(
        'post_type' => 'blog',
        'category_name' => $category,
        'author_name' => $author,
        'tag' => $tag,
        'post_status' => 'publish',
        'orderby' => 'date',
        'paged' => $paged
      ));

      if (have_posts()) : while ($loop->have_posts()) : $loop->the_post(); ?>
          <article class="cardNotice">
            <div class="thumbnail" style="background-image: url(<?= get_the_post_thumbnail_url(null, 'post-thumbnail'); ?>);">
            </div>
            <div class="content">
              <?php the_category(); ?>
              <span>Publicado em <?php the_date(); ?></span>
              <a href="<?= the_permalink() ?>" class="link_to_post">
                <?php the_title('<h5>', '</h5>'); ?>
                <?php the_excerpt() ?>
              </a>
            </div>
          </article>

        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </section>
  <section class="pagination-container">
    <?php echo ecovila_pagination($loop); ?>

  </section>
  <?php wp_reset_query(); ?>
</body>

<?php require_once 'components/footer.php'; ?>