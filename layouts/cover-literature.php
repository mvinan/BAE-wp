<?php
  $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post -> ID ), 'large' );
  $url = $thumb['0'];
?>

<section class="CoverLiterature">

  <article class="u-coverBlack">

    <header class="CoverLiterature-header u-whiteContent">
      <h1 class="Title"> <?= the_title(); ?> </h1>
      <small>Resúmen</small>
    </header>
    <div class="CoverLiterature-image" style="background-image:url('<?= $url ?>')";>
    </div>

  </article>

</section>
