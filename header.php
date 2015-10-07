<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">

    <title> <?php bloginfo('name'); if( is_page() ){ wp_title('|');} elseif (is_single()) {
      wp_title(''); } else { ?> | Home <?php }
    } ?> </title>

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <?php if (is_single() || is_page() ) : if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <meta name="description" content="<?php the_excerpt_rss(); ?>" />

      <?php endwhile; endif; elseif(is_home()) : ?>
      <meta name="description" content="<?php bloginfo('description'); ?>" />
    <?php endif; ?>

    <?php wp_head(); ?>

  </head>
  <body>

    <!-- Menú -->
