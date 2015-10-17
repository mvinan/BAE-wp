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

      <section class="Description u-sectionBlack">
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
        <article class="">

        </article>
      </section>


    <?php endwhile; ?>
  <?php endif; ?>

<?php get_footer(); ?>
