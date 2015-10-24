
<section class="Cover"
  <?php if ( has_header_image() ) { ?>
    style="background-image:url('<?php echo header_image(); ?>');"
  <?php } ?> >

  <article class="container">
    <header class="Cover-header u-whiteContent">
      <h1 class="Title animated animated flipInX"> <?php echo bloginfo('name') ?> </h1>
    </header>
    <footer>
      <a href="<?php echo get_page_link(9) ?>" class="btn btn-primary">
        <i class="fa fa-eye fa-lg"></i>
        Ver colección
      </a>
    </footer>
  </article>

</section>
