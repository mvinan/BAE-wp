<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title> <?php bloginfo('name'); if (is_page()) {
      wp_title('-');
    } elseif (is_single()) {
      ?> - <?php wp_title('');
    }elseif (is_search()) {
       wp_title('-');
    }else {
      ?> - Inicio <?php
    }?> </title>

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- description -->
  	<?php if (is_single() || is_page() ) : if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  	<meta name="description" content="<?php the_excerpt_rss(); ?>" />
  	<?php endwhile; endif; elseif(is_home()) : ?>
  	<meta name="description" content="<?php bloginfo('description'); ?>" />
  	<?php endif; ?>

    <?php wp_head(); ?>
  </head>
  <body>

    <?php if (!is_page( array('actividad', 'noticia') ) && !is_search() && !is_404()): ?>
      <!-- Brand -->
      <figure class="brand">
        <img class="brand-image" src="<?php echo get_template_directory_uri().'/assets/images/brand.png'?> " alt=" Universidad Técnica Particular de Loja" />
      </figure>
    <?php endif; ?>

    <?php if (!is_404()): ?>
      <?php include(locate_template('searchform.php')); ?>
    <?php endif; ?>

    <!-- Main -->
    <div class="menu">
      <?php if (!is_404()): ?>
        <?php include(locate_template('layouts/nav.php')); ?>
      <?php endif; ?>
    </div>
