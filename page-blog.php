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
      <button onclick="active_submenu_with_click('submenu-content-tags')">Tags <i class="fas fa-long-arrow-alt-down"></i></button>
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
</body>

<?php require_once 'components/footer.php'; ?>