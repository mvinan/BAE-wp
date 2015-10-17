<?php get_header() ?>

<?php include(locate_template('layouts/cover-noticias.php')); ?>

<!-- News -->
<section class="News">
  <article class="container">
    <div class="News-list" style="margin-top:80px;">
      <?php include(locate_template('layouts/news.php')); ?>
    </div>
  </article>
</section>

<?php get_footer() ?>
