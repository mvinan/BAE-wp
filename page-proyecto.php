<?php get_header(); ?>

  <?php include(locate_template('layouts/cover.php')); ?>

  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

      <article class="Description">
        <div class="Description-content">
          <div class="container">
            <div class="content">
              <h2 class="Subtitle text-center">La historia que lo inició</h2>
              <?php the_content(); ?>
            </div>
          </div>
        </div>
      </article>

      <section class="Description u-sectionBlack" style="padding-bottom:0;">
        <article class="Description-content">
          <div class="container">
            <div class="content u-whiteContent">
              <h2 class="Subtitle text-center"> Nuestros objetivos </h2>
              <div class="ObjetiveBox">
                <i class="fa fa-university col-md-4"></i>
                <p clasS="col-md-8"><?php the_field('objetivo') ?></p>
              </div>
            </div>
          </div>
        </article>
      </section>

      <section class="Team">
        <h2 class="Subtitle text-center">El equipo que lo hizo posible</h2>
        <article class="Team-list">

          <?php

          if( have_rows('integrante_del_equipo') ):
              while ( have_rows('integrante_del_equipo') ) : the_row(); ?>

                <div class="Member col-md-4 u-whiteContent">

                  <figure class="Member-image">
                    <img src="<?php the_sub_field('imagen_del_integrante') ?> " alt=" <?php the_sub_field('nombre_del_integrante') ?>"/>
                  </figure>
                  <h4 class="text-center">
                    <?php the_sub_field('nombre_del_integrante') ?>
                  </h4>
                  <p class="text-center appointment"><strong><?php the_sub_field('cargo_del_integrante') ?></strong></p>
                  <p class="email"> <?php the_sub_field('email_del_integrante') ?> </p>

                </div>


              <?php endwhile;
          else :

            ?> <h3>No existen integrantes.</h3><?php
          endif;
          ?>
        </article>
      </section>


    <?php endwhile; ?>
  <?php endif; ?>

<?php get_footer(); ?>
