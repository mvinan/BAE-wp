<div class="New u-blackWrapper col-md-6">
  <header>
    <h4><?php the_title(); ?> </h4>
    <small class="Date"> <?php the_time('j F, Y') ?> </small>
    <?php the_excerpt(); ?>
  </header>

  <?php
    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post -> ID ), 'large' );
    $url = $thumb['0'];
  ?>


  <div class="image-news" style="background-image:url('<?= $url ?>');">
  </div>
  <footer class="news-button">
    <a href=" <?php the_permalink() ?> " class="btn btn-primary">Leer más</a>
  </footer>
</div>
