<footer>
  <section class="Contact">
    <?php rewind_posts(); ?>
    <?php query_posts('post_per_page=1&category_name=contactanos') ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <?php
        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post -> ID ), 'full-thumbnails' );
        $url = $thumb['0'];
      ?>

      <div class="Contact-wrapper" style="background-image:url( <?= $url ?> );">
          <article class="container">
            <h4> Contáctanos: </h4>

            <?php the_content(); ?>
          </article>

      </div>








    <?php endwhile; else : ?>
      <p><?php _e( 'Lo sentimos, algo esta roto, intenta agregar un post por favor.' ); ?></p>
    <?php endif; ?>
    <?php wp_reset_query(); ?>

  </section>
  <div class="Copyright">

  </div>
</footer>


<?php wp_footer(); ?>

</body>
</html>
