<?php get_header(); ?>

<?php include(locate_template('layouts/cover-home.php')); ?>

<!-- Description -->
<section class="Description u-blackWrapper">
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

    <article class="Description-carousel col-md-6 col-sm-6">
      <?php include(locate_template('layouts/carousel.php')); ?>
    </article>

  </div>
</section>

<!-- Activities -->
<section class="Activities">
  <article class="container">
    <h2 class="Subtitle text-center">Actividades</h2>
    <?php include(locate_template('layouts/activities-home.php')); ?>
    <footer class="text-center" style="margin-top:40px;margin-bottom: 80px;">
      <a href=" <?= get_category_link(4) ?> " class="btn btn-primary"> Ver todas las actividades</a>
    </footer>
  </article>
</section>

<!-- Colections -->
<section class="Colections u-blackWrapper">
  <article class="container">
    <h2 class="Subtitle text-center" style="margin:80px 0;">Colección</h2>
    <?php include(locate_template('layouts/colection.php')); ?>
  </article>
</section>

<!-- News -->
<section class="News">
  <article class="container">
    <h2 class="Subtitle text-center" style="margin:80px 0">Noticias</h2>

    <div class="News-list">
      <?php include(locate_template('layouts/news.php')); ?>
    </div>
  </article>
</section>

<?php get_footer(); ?>
