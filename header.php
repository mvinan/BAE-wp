<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title> <?php bloginfo('name') ?> </title>

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <?php wp_head(); ?>
  </head>
  <body>

    <?php if (!is_page('actividad') ): ?>
      <!-- Brand -->
      <figure class="brand">
        <img class="brand-image" src="<?= get_template_directory_uri().'/assets/images/brand.png'?> " alt=" Universidad Técnica Particular de Loja" />
      </figure>
    <?php endif; ?>

    <!-- Main -->
    <div class="menu">
      <?php include(locate_template('layouts/nav.php')); ?>
    </div>
