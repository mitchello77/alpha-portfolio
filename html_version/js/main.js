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
  //scroll Reveal
  window.sr = ScrollReveal();
  sr.reveal('#mini-skills .col',{origin: 'left', delay: '250', distance: '40px'});

  $('#before-after').imagesLoaded( function() {
    $('#before-after').twentytwenty();
  });

  $("#featured-projects .owl-carousel").owlCarousel({
    margin: 20,
    center: true,
    dotsEach: true,
    loop: true
  });
});
