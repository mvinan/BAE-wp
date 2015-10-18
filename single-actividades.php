<?php get_header(); ?>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <section class="CoverNews">
      <article class="container">
        <header class="text-center u-whiteContent">
          <h1 class="Title"> <?php the_title(); ?></h1>
        </header>
      </article>
    </section>
  <?php endwhile; ?>
<?php endif; ?>

<?php include(locate_template('layouts/content.php')); ?>

<?php get_footer(); ?>
