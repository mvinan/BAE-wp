<?php rewind_posts(); ?>

<?php
$args = array(
  'post_type' => 'page',
  'order' => 'DES',
  'post_per_page' => '4',
  'post__in' => array(88,91,104,106)
  );
query_posts($args);
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <div class="Colection col-md-6">

    <div class="Colection-box">
      <section class="Colection-content">

        <div class="content">
          <header>
            <h4> <?php the_title(); ?> </h4>
          </header>
          <article class="u-whiteContent">
            <p>
              <?= the_excerpt() ?>
            </p>
          </article>
        </div>

        <?php
          $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post -> ID ), 'medium' );
          $url = $thumb['0'];
        ?>

        <div class="image" style="background-image:url('<?= $url ?>');"></div>

      </section>
    </div>

    <div class=" Colection-button">
      <a href=" <?php the_permalink() ?> " class="btn btn-secondary">ver colección</a>
    </div>

  </div>
<?php endwhile; else : ?>
  <p><?php _e( 'Lo sentimos, algo esta roto, intenta agregar un post por favor.' ); ?></p>
<?php endif; ?>
<?php wp_reset_query(); ?>
