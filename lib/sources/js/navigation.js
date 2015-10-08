(function(){

  var $menu        = $('.menu'),
      $main        = $('main'),
      $menuList    = $('.navigation-list'),
      $buttonMenu  = $('.btn-menu'),
      $buttonTimes = $('.icon-times');

  $buttonMenu.on('click', function(){
    $main.toggleClass('active');
  })

  $buttonTimes.on('click', function(e){
    e.preventDefault();
    $main.toggleClass('active');
  })

})();
