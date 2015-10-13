<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <article class="volumen col-md-10">
    <div class="volumen-box">
        <?php
          $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post -> ID ), 'large' );
          $url = $thumb['0'];
        ?>

      <div class="boxImage col-md-7">
        <div class="img" style="background-image:url('<?= $url ?>');">
        </div>
      </div>

      <div class="boxContent col-md-4">
        <div class="boxContent-title">
          <h4><?php the_title(); ?></h4>
        </div>

        <div class="boxContent-description">
          <?php the_excerpt(); ?>
        </div>
      </div>
  </div>

  <div class="volumen-menu">
    <ul class="volumen-menu-list">
      <li class="item"><a href=" <?php the_permalink(); ?> " class="item-link">
        <i class="fa fa-book fa-fw"></i> Resúmen </a></li>
      <li class="item"><a href=" <?php the_permalink(); ?> " class="item-link">   <i class="fa fa-rocket fa-fw"></i>Actividades </a></li>
      <li class="item"><a href=" <?php the_permalink(); ?> " class="item-link"> <i class="fa fa-users fa-fw"></i>Autores </a></li>
    </ul>
  </div>

  </article>

<?php endwhile; else : ?>
<p>
  <?php _e( 'Lo sentimos, algo esta roto, intenta agregar un post por favor.' ); ?>
</p>
<?php endif; ?>
<?php wp_reset_query(); ?>
