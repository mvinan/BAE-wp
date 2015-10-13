<div id="myCarousel" class="carousel slide Literatura-carousel" data-ride="carousel">
<!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"> </li>
    <li data-target="#myCarousel" data-slide-to="1"> </li>
    <li data-target="#myCarousel" data-slide-to="2"> </li>
    <li data-target="#myCarousel" data-slide-to="3"> </li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">

    <?php rewind_posts(); ?>
    <?php query_posts(array ('posts_per_page' => 4, 'post_type'=> 'literatura')) ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <div class="item">
        <a href=" <?php the_permalink() ?> " class="img-carousel">
          <?php the_post_thumbnail('large'); ?>
        </a>
			</div>

			<?php endwhile; else : ?>
				<p><?php _e( 'Lo sentimos, algo esta roto, intenta agregar un post por favor.' ); ?></p>
			<?php endif; ?>

  </div>
</div>
