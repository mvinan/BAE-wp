<?php get_header() ?>

<section class="Activities">
  <article class="container">
    <div class="Activities-list">

      <?php rewind_posts(); ?>
      <?php query_posts(array ('posts_per_page' => 4, 'post_type'=> 'actividades' )) ?>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php include(locate_template('layouts/activities-home.php')); ?>

      <?php endwhile; else : ?>
        <p><?php _e( 'Lo sentimos, algo esta roto, intenta agregar un post por favor.' ); ?></p>
      <?php endif; ?>
      <?php wp_reset_query(); ?>

      <footer class="text-center" style="margin-top:40px;margin-bottom: 80px;">
        <a href=" <?= get_category_link(4) ?> " class="btn btn-primary"> Ver todas las actividades</a>
      </footer>

    </div>
  </article>
</section>

<?php get_footer() ?>
