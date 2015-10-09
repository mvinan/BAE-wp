<?php rewind_posts(); ?>
<?php query_posts('post_per_page=2&post_type=noticias&order=ASC') ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <div class="New u-blackWrapper col-md-6">

    <header class="u-whiteContent">
      <h4> <?php the_title(); ?> </h4>
      <small class="Date"> <?php the_time('j F, Y') ?> </small>
      <?php the_excerpt(); ?>
    </header>

    <?php
      $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post -> ID ), 'medium' );
      $url = $thumb['0'];
    ?>


    <div class="image-news u-whiteContent" style="background-image:url('<?= $url ?>');">
    </div>
    <footer class="news-button">
      <a href="#" class="btn btn-primary">Leer más</a>
    </footer>


  </div>

<?php endwhile; else : ?>
  <p><?php _e( 'Lo sentimos, algo esta roto, intenta agregar un post por favor.' ); ?></p>
<?php endif; ?>
<?php wp_reset_query(); ?>
