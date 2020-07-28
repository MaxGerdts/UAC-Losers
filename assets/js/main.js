$(document).ready(function(){
  'use strict';

  // Collapse Navbar
  var navbarCollapse = function() {
    if ($('.navbar').offset().top > 100) {
      $('.navbar').addClass('navbar-scrolled');
    } else {
      $('.navbar').removeClass('navbar-scrolled');
    }
  };
  // Collapse now if page is not at top
  navbarCollapse();
  // Collapse the navbar when page is scrolled
  $(window).scroll(navbarCollapse);
});
