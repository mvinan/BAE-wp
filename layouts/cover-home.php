
<section class="Cover"
  <?php if ( has_header_image() ) { ?>
    style="background-image:url('<?= header_image(); ?>');"
  <?php } ?> >

  <article class="container">
    <header class="Cover-header u-whiteContent">
      <h1 class="Title animated animated flipInX"> <?= bloginfo('name') ?> </h1>
    </header>
    <footer>
      <a href="<?= get_page_link(9) ?>" class="btn btn-primary">
        <i class="fa fa-eye fa-lg"></i>
        Ver colección
      </a>
    </footer>
  </article>

</section>
