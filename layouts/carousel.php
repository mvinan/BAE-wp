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

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <a href="<?php the_permalink(); ?>">
        <h3><?php the_title();?></h3>
      </a>

      <figure>
        <?php the_post_thumbnail('large'); ?>
			</figure>

			<?php endwhile; else : ?>
				<p><?php _e( 'Lo sentimos, algo esta roto, intenta agregar un post por favor.' ); ?></p>
			<?php endif; ?>

    <div class="item {{#if @first}} active {{/if}}">
      <a href="{{url}}"><div style="background-image:url('{{image}}')" class="img-carousel"/> </div></a>
    </div>

  </div>
</div>
