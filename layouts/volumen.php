<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <article class="volumen col-md-10 col-xs-12">
      <a href="#" class="fa fa-plus btn-down"></a>

      <div class="volumen-box">
          <?php
            $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post -> ID ), 'large' );
            $url = $thumb['0'];
          ?>

        <div class="boxImage col-sm-7 col-xs-11">
          <div class="img" style="background-image:url('<?= $url ?>');">
          </div>
        </div>

        <div class="boxContent col-md-4">
          <div class="boxContent-title">
            <h4><?php the_title(); ?></h4>
          </div>

          <div class="boxContent-description">
            <?php the_excerpt(); ?>
          </div>
        </div>
    </div>

    <div class="volumen-menu">

        <div class="item"><a href=" <?php the_permalink(); ?> " class="item-link">
          <i class="fa fa-book fa-fw"></i> Resúmen </a></div>

        <div class="item item-activity">
          <a href="#" class="item-link action-activities"><i class="fa fa-rocket fa-fw"></i>Actividades</a>
          <article id="activity-<?php the_ID(); ?> " class="volumenActivities">
            <a href="#" class="fa fa-times fa-lg"></a>
            <div class="volumenActivities-listContainer container">
              <h3>Escoge una actividad:</h3>
                <?php

                $activities = wp_get_object_terms( get_the_ID(), 'actividades', array( 'fields' => 'ids' ) );

                $all_activities = get_posts( array(
               'numberposts' => -1,
               'post_type' => 'actividades',
               'tax_query' => array(
                 'taxonomy' => 'literatura',
                 'field' => 'id'
               ),
               'post__in' => $activities,
               'suppress_filters' => false
              ) );
              if( $all_activities ) {

                  foreach ( $all_activities as $activity ) { ?>
                    <a href="<?= get_permalink( $activity->ID ) ?>" class="activity">
                      <h3> <?= get_the_title( $activity->ID) ?> </h3>
                      <div class="meta">
                        <p><strong><?= get_the_time('j F, Y', $activity->ID ); ?></strong></p>
                        <span href="<?= get_permalink( $activity->ID ) ?>" class="btn-go"><i class="fa fa-arrow-circle-right"></i></span>
                      </div>
                    </a>


                    <?php
                  }
              }
                ?>
            </div>
          </article>

        </div>
        <div class="item item-authors">
          <a href="#" class="item-link action-authors"> <i class="fa fa-users fa-fw"></i>Autores </a>
          <article id="authors-<?php the_ID(); ?> " class="volumenAuthors">
            <a href="#" class="fa fa-times fa-lg"></a>
            <div class="volumenAuthors-listContainer container">
              <h3>Escoge un autor:</h3>
                <?php

                $authors = wp_get_object_terms( get_the_ID(), 'autores_ecuatorianos', array( 'fields' => 'ids' ) );

                $all_authors = get_posts( array(
               'numberposts' => -1,
               'post_type' => 'autores_ecuatorianos',
               'tax_query' => array(
                 'taxonomy' => 'literatura',
                 'field' => 'id'
               ),
               'post__in' => $authors,
               'suppress_filters' => false
              ) );
              if( $all_authors ) {

                  foreach ( $all_authors as $author ) { ?>
                    <a href="<?= get_permalink( $author->ID ) ?>" class="activity">
                      <h3> <?= get_the_title( $author->ID) ?> </h3>
                      <div class="meta">
                        <p><strong><?= the_field('nacimiento_fallecimiento', $author->ID); ?></strong></p>
                        <span href="<?= get_permalink( $author->ID ) ?>" class="btn-go"><i class="fa fa-arrow-circle-right"></i></span>
                      </div>
                    </a>


                    <?php
                  }
              }
                ?>
            </div>
          </article>
        </div>

    </div>
  </article>
<?php endwhile; else : ?>
<p>
  <?php _e( 'Lo sentimos, algo esta roto, intenta agregar un post por favor.' ); ?>
</p>
<?php endif; ?>
<?php wp_reset_query(); ?>
