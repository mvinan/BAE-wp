<?php get_header(); ?>
<?php
global $query_string;
query_posts($query_string.'&posts_per_page=9999');

?>

<!-- Activities -->
<section class="Activities">
  <article class="container">
    <h2 class="Subtitle text-center">Actividades</h2>
    <div class="Activities-list">
      <?php rewind_posts(); ?>
      <?php query_posts(array ('post_type'=> 'actividades' )) ?>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php include(locate_template('layouts/activities-home.php')); ?>

      <?php endwhile; ?>
      <div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
      <?php else : ?>
        <p><?php _e( 'Lo sentimos, algo esta roto, intenta agregar un post por favor.' ); ?></p>
      <?php endif; ?>
      <?php wp_reset_query(); ?>
    </div>
    <footer class="text-center" style="margin-top:40px;margin-bottom: 80px;">
      <?php echo paginate_links(); ?>
    </footer>
  </article>
</section>

<?php get_footer(); ?>
