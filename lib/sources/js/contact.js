(function(){
  var $contactInfo = $('footer article .content');
  var $contactForm = $("footer div[role='form']");
  var $lessLastElement = $('footer article > *:not(:last-child)')

  function adding_class(){
    $lessLastElement.wrapAll(' <div class="content col-md-6">  </div> ');
    $contactForm.addClass('col-md-6');

    //Adding icons
    $('footer article .content ul li:nth-child(1)')
      .prepend(" <i class='fa fa-user'></i> ")

    $('footer article .content ul li:nth-child(2)')
      .prepend(" <i class='fa fa-mobile'></i> ")

    $('footer article .content ul li:nth-child(3)')
      .prepend(" <i class='fa fa-envelope'></i> ")
  }

  adding_class();

})();
