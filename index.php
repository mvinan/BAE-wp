<?php get_header(); ?>
<?php include(locate_template('layouts/cover.php')); ?>

<section class="Description u-whiteContent u-blackWrapper">
  <div class="container">

    <article class="Description-content col-md-6 col-sm-6">
      <header>
        <h2 class="Subtitle">¿Que és la biblioteca básica de autores ecuatorianos?</h2>
      </header>

      <section class="u-whiteContent">
        <p class="Description-content--description">
          <?= bloginfo('description') ?>
        </p>
        <a href="#" class="btn btn-primary">Conoce Más</a>
      </section>
    </article>

    <article class="">
      <?php include(locate_template('layouts/carousel.php')); ?>
    </article>

  </div>

</section>

<?php get_footer(); ?>
