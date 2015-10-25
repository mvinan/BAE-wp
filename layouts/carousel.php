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
    <?php
    if( have_rows('carrusel') ):
        while ( have_rows('carrusel') ) : the_row();
          ?>
            <div class="item">
              <a href="<?php echo the_sub_field('url'); ?>" class="img-carousel"> 
                <img src="<?php echo the_sub_field('image') ?> " alt="<?php echo the_sub_field('image_title'); ?>" title="<?php echo the_sub_field('image_title'); ?>">
              </a>
            </div>        
          <?php
        endwhile;

    else :
      ?> <p>No exiten imagenes por el momento.</p> <?php
    endif;
    ?>
  </div>
</div>
