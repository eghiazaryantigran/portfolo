$(document).ready(function(){

    $('nav .main-nav li a').click(function(evt) {
      evt.preventDefault();
      $('html, body').stop().animate({
        scrollTop: $( $(this).attr('href') ).offset().top
      }, 2000);
    });

});


