(function (){

  var $goButton= $('.volumen .volumen-menu .item .btn-go');
  var $goActivity = $('.volumen .volumen-menu .item .activity')
  var $downMenuButton = $('.volumen .btn-down');

  function disableScroll() {
    $('body').css('overflow-y',"hidden")
  }

  function enableScroll() {
    $('body').css('overflow-y', "")
  }

  //downIn and Out menu with de options
  $downMenuButton.click( function(e){
    e.preventDefault();

    $(this).parent( $('.volumen') ).toggleClass('volumen-active');
    $(this).toggleClass('fa-plus fa-minus')

  })

  // click animate activity
  $goActivity.click( function(e){
    e.preventDefault();
    $(this).addClass('animated bounceOutRight')

    var $url = $(this).attr('href');

    setTimeout(function(){
      window.location.assign($url)
    }, 300)
  })

  function interactive_activities (){

    var $timeButton = $(".volumen .volumenActivities .fa-times");
    var $activityButton = $('.volumen .volumen-menu .item.item-activity .action-activities');


    //close activity with fadeOut
    $timeButton.click( function(e){
      e.preventDefault();
      $(this).parent().fadeOut();
      enableScroll();

    })

    //open activity with fadeIn
    $activityButton.click( function(e){
      e.preventDefault();
      $(this).next().fadeIn();
      disableScroll();

    })

  }


  function interactive_authors (){

    var $timeButton = $(".volumen .volumenAuthors .fa-times");
    var $activityButton = $('.volumen .volumen-menu .item.item-authors .action-authors');


    //close author with fadeOut
    $timeButton.click( function(e){
      e.preventDefault();
      $(this).parent().fadeOut();
      enableScroll();
    })

    //open author with fadeIn
    $activityButton.click( function(e){
      e.preventDefault();
      $(this).next().fadeIn();
      disableScroll();
    })

  }


  interactive_activities();
  interactive_authors();


})();
