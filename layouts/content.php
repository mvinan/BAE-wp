<section class="summary">
	<article class="single">
		<div class="container post_content">

			<div class="single-socialChannel">	<!-- Social chanels -->
				<?php include(locate_template('sidebar.php')); ?>

				<?php if (have_posts()) : ?>
				  <?php while (have_posts()) : the_post(); ?>
						<div class="date"><strong><?php the_time('j F, Y') ?></strong></div>
				  <?php endwhile; ?>
				<?php endif; ?>

			</div>
			<div class="single-content col-md-10">
				<!-- Content Post -->
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<?php if ('autores_ecuatorianos' == get_post_type() ): ?>
						<h2><strong><?php the_field('nacimiento_fallecimiento'); ?></strong></h2>
					<?php endif ?>

					<?php the_content(); ?>

				<?php endwhile; else : ?>
					<p><?php _e( 'Lo siento no existe algun contenido en esta single Page.' ); ?></p>
				<?php endif; ?>
			</div>
		</div>
	</article>
</section>
