$(function() {
  console.log("JQuery Version: " + $.fn.jquery );
  $(window).scroll(function () {
    if ($(window).scrollTop() >= 70) {
      $('header').removeClass('fixed');
    }
    if ($(window).scrollTop() < 69) {
      $('header').addClass('fixed');
    }
  });
});
