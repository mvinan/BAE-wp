<div class="Activities-list">
  <?php rewind_posts(); ?>
  <?php query_posts('post_per_page=2&post_type=actividades') ?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="Activity">
      <div class="Activity-author col-md-2 col-lg-2">
        <header class="AuthorPhoto">
          <?php the_author_image(); ?>
        </header>
        <footer class="AuthorInfo">
          <small class="Fecha"> <?php the_time('j F, Y') ?> </small>
          <h6> <?php the_author() ?> </h6>
        </footer>
      </div>

      <div class="Activity-content col-md-10 col-lg-10">
        <header class="TitleActivity">
          <h3> Foro:  <?php the_title(); ?> </h3>
          <small> <?php the_category(); ?> </small>
        </header>
        <section class="DescriptionActivity">
          <?php the_excerpt(); ?>
        </section>
        <footer class="ButtonActivity">
          <a href=" <?php the_permalink() ?>" class="btn btn-primary">Participa !</a>
        </footer>
      </div>

    </div>

  <?php endwhile; else : ?>
    <p><?php _e( 'Lo sentimos, algo esta roto, intenta agregar un post por favor.' ); ?></p>
  <?php endif; ?>
  <?php wp_reset_query(); ?>


</div>
