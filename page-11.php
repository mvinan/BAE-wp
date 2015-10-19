<?php get_header() ?>

<?php include(locate_template('layouts/cover-noticias.php')); ?>

<!-- News -->
<section class="News">
  <article class="container">
    <div class="News-list" style="margin-top:80px;">
      <?php rewind_posts(); ?>

      <?php query_posts(array ('paged' => $paged,'posts_per_page' => 4, 'post_type'=> 'noticias' )); ?>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php include(locate_template('layouts/news.php')); ?>
      <?php endwhile; ?>
        <footer class="nav-buttons col-sm-12">
          <?= paginate_links() ?>
        </footer>
      <?php else : ?>
      <p><?php _e( 'Lo sentimos, algo esta roto, intenta agregar un post por favor.' ); ?></p>
      <?php endif; ?>
      <?php wp_reset_query(); ?>

    </div>
  </article>

</section>

<?php get_footer() ?>
