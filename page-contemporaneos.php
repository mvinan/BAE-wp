<?php get_header() ?>

<?php include(locate_template('layouts/cover.php')); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section>
  <div class="container">
    <div class="Description text-center">
      <?php the_content(); ?>
    </div>

    <?php endwhile; else : ?>
      <p><?php _e( 'Lo sentimos, algo esta roto, intenta agregar un volúmen por favor.' ); ?></p>
    <?php endif; ?>

  </div>
</section>

<section class="volumenes u-blackWrapper">
  <?php rewind_posts(); ?>
  <?php query_posts(array ('posts_per_page' => 4, 'post_type'=> 'literatura', 'orderby' => 'title', 'order' => 'ASC', 'cat' => 11 )) ?>

  <div class="container">
    <?php include(locate_template('layouts/volumen.php')); ?>
  </div>
</section>


<?php get_footer() ?>
