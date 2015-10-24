<div class="SearchForm">
  <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
    <input type="text" size="18" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" class="inputText"/>
    <i class="fa fa-search <?php if( is_search() ): ?> otherColor <?php endif; ?>"></i>
    <input type="submit" id="searchsubmit" value="" class="hidden" />
  </form>
</div>
