
$(document).ready(function() {

    var revealElement = $('footer .reveal');

    $(window).scroll(function() {
      
       if($(window).scrollTop() + $(window).height() > $(document).height() - 100) {
         
           $(revealElement).addClass('show');
         
       } else if($(revealElement).hasClass('show') && $(window).scrollTop() + $(window).height() > $(document).height() - 150) {
         
          $(revealElement).removeClass('show');
         
       }
    });
});