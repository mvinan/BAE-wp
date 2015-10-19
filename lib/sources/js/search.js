(function(){
  var $searchBtn = $('.SearchForm form i');
  var $searchInput = $('.SearchForm form .inputText');
  var $searchResult = $('.SearchPage .Result');

  $searchBtn.click(function(e){
    $searchInput.toggleClass('searchActive');
  });

  $searchResult.click(function(e){
    e.preventDefault();
    $(this).addClass('animated bounceOutRight');

    var $url = $(this).attr('href');

    setTimeout(function(){
      window.location.assign($url)
    }, 300)

  });

})();
