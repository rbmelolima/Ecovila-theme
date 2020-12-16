<section class="news">
  <h2>Notícias, novidades e dicas sobre um condomínio que tem muito a oferecer!</h2>
  <div class="divider"></div>
  <div class="news-container">
    <?php
    $loop = new WP_Query(array(
      'post_type' => 'blog',
      '$post_count' => 2,
    ));
    while ($loop->have_posts()) :  $loop->the_post();
    ?>

      <article class="cardNotice">
        <div class="thumbnail" style="background-image: url(<?= get_the_post_thumbnail_url(null, 'post-thumbnail'); ?>);">
        </div>
        <div class="content">
          <?php the_category(); ?>
          <span>Publicado em <?php the_date(); ?></span>
          <?php the_title('<h5>', '</h5>'); ?>
        </div>
      </article>

    <?php
    endwhile;
    wp_reset_query();
    ?>
  </div>
</section>