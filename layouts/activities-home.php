<div class="Activity">
  <div class="Activity-author col-md-2 col-lg-2">
    <header class="AuthorPhoto">
      <img class="img" src="<?php echo get_template_directory_uri().'/assets/images/profile.svg' ?>" alt="" />
    </header>
    <footer class="AuthorInfo">
      <small class="Date"> <?php the_time('j F, Y') ?> </small>
      <h6> <?php the_author() ?> </h6>
    </footer>
  </div>

  <div class="Activity-content col-xs-12 col-md-10 col-lg-10">
    <header class="TitleActivity">
      <h3> Foro:  <?php the_title(); ?> </h3>
      <small> <span class="category-name"><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ''; } ?></span></small>
    </header>
    <section class="DescriptionActivity">
      <?php the_excerpt(); ?>
    </section>
    <footer class="ButtonActivity">
      <a href=" <?php the_permalink() ?>" class="btn btn-primary">Participa !</a>
    </footer>
  </div>

</div>
