<?php get_header(); ?>
<?php
the_title();
?>
<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>

  <p>
    <?php the_content(); ?>
  </p>


  <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
