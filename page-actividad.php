<?php get_header(); ?>
<!-- Activities -->
<section class="Activities">
  <article class="container">
    <h2 class="Subtitle text-center">Actividades</h2>
    <div class="Activities-list">
      <?php rewind_posts(); ?>
      <?php query_posts(array ('paged' => $paged,'posts_per_page' => 4, 'post_type'=> 'actividades' )) ?>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php include(locate_template('layouts/activities-home.php')); ?>

      <?php endwhile; ?>
        <footer class="nav-buttons">
          <?= paginate_links() ?>
        </footer>
      <?php else : ?>
        <p><?php _e( 'Lo sentimos, algo esta roto, intenta agregar un post por favor.' ); ?></p>
      <?php endif; ?>
      <?php wp_reset_query(); ?>
    </div>
  </article>
</section>

<?php get_footer(); ?>
