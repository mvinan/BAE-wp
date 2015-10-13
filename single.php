<?php get_header(); ?>
<section class="">
	<article class="single">
		<div class="container-fluid post_content">
			<span class="here"></span>

			<div class="the_content row-fluid">

				<!-- The Content LOOP-->
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<?php the_content(); ?>

				<?php endwhile; else : ?>
					<p><?php _e( 'Lo siento no existe algun contenido en esta single Page.' ); ?></p>
				<?php endif; ?>
				<!-- END Content LOOP-->

			</div>
		</div>
	</article>
</section>

<?php get_footer(); ?>
