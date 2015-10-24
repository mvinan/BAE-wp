<?php
  $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post -> ID ), 'full-thumbnails' );
  $url = $thumb['0'];
?>

<section class="Cover" style="background-image:url('<?php echo $url ?>');">

  <article class="container">

    <header class="Cover-header u-whiteContent">
      <h1 class="Title"> Colecciones </h1>
    </header>

  </article>

</section>
