(function(){
  var $menber = $('.Team-list .Member');

  var a = $('.Team-list > .Member');

  for( var i = 0; i < a.length; i+=3 ) {
    a.slice(i, i+3).wrapAll('<div class="MemberRow container"></div>');
  }

  var $memberRow = $('.Team-list .MemberRow');

  $memberRow.wrap('<div class="u-sectionBlack"></div>')

})();
