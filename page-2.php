<?php get_header(); ?>

  <?php include(locate_template('layouts/cover-single.php')); ?>

  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

      <article class="Description">
        <div class="Description-content">
          <div class="container">
            <div class="content">
              <h2 class="Subtitle text-center"><?php echo the_field('header_project_description') ?></h2>
              <div>
                <?php echo the_field('project_description'); ?>
              </div>
            </div>
          </div>
        </div>
      </article>

      <section class="Description u-sectionBlack" style="padding-bottom:0;">
        <article class="Description-content">
          <div class="container">
            <div class="content u-whiteContent">
              <h2 class="Subtitle text-center"> <?php the_field('header_objetive') ?> </h2>
              <div class="ObjetiveBox">
                <i class="fa fa-university col-md-4"></i>
                <div class="col-md-6">
                  <?php
                  if( have_rows('objetives') ):
                      while ( have_rows('objetives') ) : the_row();
                        ?>
                          <?php the_sub_field('objetivo'); ?>
                        <?php
                      endwhile;
                
                  else :
                    ?> <p>No exiten objetivos por el momento.</p> <?php
                  endif;
                ?>
                </div>
              </div>
            </div>
          </div>
        </article>
      </section>

      <section class="Team">
        <h2 class="Subtitle text-center"><?php echo the_field('encabezado_del_equipo'); ?></h2>
        <article class="Team-list">
          <h3 class="text-center" style="margin-bottom:30px;"><?php echo the_field('encabezado_team_director'); ?></h3>
          <?php
          if( have_rows('directivos') ):
              while ( have_rows('directivos') ) : the_row(); ?>
                <div class="Member col-md-4 u-whiteContent">
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
      <section class="Gestores">
        <article class="Team-list">
          <h3 class="text-center" style="margin-bottom:30px;"><?php echo the_field('header_manage_team'); ?></h3>
          <?php
          if( have_rows('equipo_gestor') ):
              while ( have_rows('equipo_gestor') ) : the_row(); ?>
                <div class="Member col-md-4 u-whiteContent">
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
      <section class="Prologuistas">
        <article class="Team-list">
          <h3 class="text-center" style="margin-bottom:30px;"><?php echo the_field('header_prologuistas'); ?></h3>
          <?php
          if( have_rows('prologuistas') ):
              while ( have_rows('prologuistas') ) : the_row(); ?>
                <div class="Member col-md-4 u-whiteContent">
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
