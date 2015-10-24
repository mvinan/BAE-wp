<?php get_header(); ?>

	<section class="SearchPage">
		<div class="container">
			<section id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

				<?php if ( have_posts() ) : ?>

					<header class="page-header">
						<h3 class="page-title">
			          Resultados para: <span><?php echo get_search_query() ?> </span>
						</h3>
					</header>

					<?php	while ( have_posts() ) : the_post(); ?>

						<div href="<?php the_permalink() ?>" class="Result">
							<h3> <?php the_title() ?> </h3>
							<div class="meta">
								<p><strong><?php the_time('j F, Y'); ?></strong></p>
								<span class="btn-go"><i class="fa fa-arrow-circle-right"></i></span>
							</div>
						</div>

						<?php	endwhile;


				// If no content, include the "No posts found" template.
				else :?>
			      <h3>No encontramos resultados para <span><?php echo get_search_query(); ?></span>. Intenta de otra forma, por favor.</h3>

			    <?php	endif;?>

			  </main>
			</section>
		</div>
	</section>

<?php get_footer(); ?>
