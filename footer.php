<footer>
  <section class="Contact">
    <?php rewind_posts(); ?>
    <?php query_posts('post_per_page=1&category_name=contactanos') ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <?php
        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post -> ID ), 'large' );
        $url = $thumb['0'];
      ?>

      <div class="Contact-wrapper" style="background-image:url( <?php echo $url ?> );">
          <article class="container">
            <h4><?php echo the_field('header_contact'); ?></h4>
            <div style="margin-bottom:30px;"><?php echo the_field('contact_excerpt'); ?></div>
            <div>
              <?php
              if( have_rows('contacts') ):
                  while ( have_rows('contacts') ) : the_row(); ?>
                    <ul>
                      <li><?php the_sub_field('contact_name') ?></li>
                      <li><?php the_sub_field('contact_phone') ?></li>
                      <li><?php the_sub_field('contact_mail') ?></li>
                    </ul>
                  <?php endwhile;
              else :

                ?> <h3>No existen integrantes.</h3><?php
              endif;
              ?>
            </div>
            <div class="col-md-6">
              <?php the_content(); ?>
            </div>
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
          <a href="//utpl.edu.ec"><img class="brand-image" src="<?php echo get_template_directory_uri().'/assets/images/UTPLlogo.png'?> " alt=" Universidad Técnica Particular de Loja" /></a>
        </div>
        <div class="SocialChannels">
          <ul class="SocialChannels-list">
            <li><a href="//plus.google.com/+UTPLoficial" class="fa fa-google-plus"></a></li>
            <li><a href="//www.facebook.com/utpl.loja" class="fa fa-facebook"></a></li>
            <li><a href="//www.youtube.com/user/utpl" class="fa fa-youtube"></a></li>
            <li><a href="//twitter.com/utpl" class="fa fa-twitter"></a></li>
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
