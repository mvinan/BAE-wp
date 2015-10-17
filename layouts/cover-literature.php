<?php
  $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post -> ID ), 'large' );
  $url = $thumb['0'];
?>

<section class="CoverLiterature">

  <article class="u-coverBlack">

    <header class="CoverLiterature-header u-whiteContent">
      <h1 class="Title animated fadeInLeft"> <?= the_title(); ?> </h1>
      <small class="animated flipInX">Resúmen</small>
    </header>
    <div class="CoverLiterature-image animated fadeInDown" style="background-image:url('<?= $url ?>')";>
    </div>

  </article>

</section>
