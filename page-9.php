<?php get_header() ?>

<?php include(locate_template('layouts/cover-single.php')); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="container">
  <div class="Description text-center">
    <?php the_content(); ?>
  </div>

  <?php endwhile; else : ?>
    <p><?php _e( 'Lo sentimos, algo esta roto, intenta agregar un post por favor.' ); ?></p>
  <?php endif; ?>

</section>

<!-- Colections -->
<section class="Colections u-blackWrapper">
  <article class="container">
    <h2 class="Subtitle text-center" style="margin:80px 0;"></h2>
    <?php include(locate_template('layouts/colection.php')); ?>
  </article>
</section>


<?php get_footer() ?>
