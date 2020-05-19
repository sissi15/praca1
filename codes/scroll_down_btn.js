//scroll down button
$(function() {
    $('.scroll-down').click (function() {
      $('html, body').animate({scrollTop: $('div.container').offset().top }, 'slow');
      return false;
    });
  });