// Parallax Effect for Hero Section
$(document).ready(function() {
    $(window).scroll(function() {
      var scrollTop = $(window).scrollTop();
      $('.parallax-bg').css('background-position', 'center ' + -(scrollTop / 4) + 'px');
    });
  });
