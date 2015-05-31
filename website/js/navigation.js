$(document).ready(function() {

// On click show menu on small screen

  $('body').addClass('js');
  var $menu = $('#menu'),
  $menulink = $('.menu-link');
  
  $menulink.click(function() {
    $menulink.toggleClass('active');
    $menu.toggleClass('active');
    return false;
  });

var toggled = 0;

  $('.menu-link').click(function(){
    if(toggled == 0){
      toggled++;
    }
    else{
      toggled--;
    }
  });
    
  $('#close').click(function(){
      $menu.removeClass('active');
  });

});