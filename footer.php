<footer>
  <section class="Contact">
    <?php rewind_posts(); ?>
    <?php query_posts('post_per_page=1&category_name=contactanos') ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <?php
        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post -> ID ), 'full-thumbnails' );
        $url = $thumb['0'];
      ?>

      <div class="Contact-wrapper" style="background-image:url( <?= $url ?> );">
          <article class="container">
            <h4> Contáctanos </h4>

            <?php the_content(); ?>
          </article>

      </div>

    <?php endwhile; else : ?>
      <p><?php _e( 'Lo sentimos, algo esta roto, intenta agregar un post por favor.' ); ?></p>
    <?php endif; ?>
    <?php wp_reset_query(); ?>

  </section>
  <div class="Copyright">

    <div class="container">
      <div class="Copyright-brand">
        <div class="Brand">
          <a href="//utpl.edu.ec"><img class="brand-image" src="<?= get_template_directory_uri().'/assets/images/UTPLlogo.png'?> " alt=" Universidad Técnica Particular de Loja" /></a>
        </div>
        <div class="SocialChannels">
          <ul class="SocialChannels-list">
            <li><a href="#" class="fa fa-google-plus"></a></li>
            <li><a href="#" class="fa fa-facebook"></a></li>
            <li><a href="#" class="fa fa-instagram"></a></li>
            <li><a href="#" class="fa fa-twitter"></a></li>
          </ul>
        </div>

      </div>
    </div>
      <div class="Copyright-author">
        <div class="container">
          <div class="wrapper">
            <p>2015 ©Copyright, Biblioteca básica de autores ecuatorianos </p>
            <p>sitio desarrollado por <a href="http://miguelvinan.com" >@miguelviñan</a></p>
          </div>
        </div>
      </div>

  </div>
</footer>


<?php wp_footer(); ?>

</body>
</html>
