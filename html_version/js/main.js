// Varibles
var keys = {37: 1, 38: 1, 39: 1, 40: 1};
var intropresent = false;
var theater = theaterJS({"autoplay": false, "minSpeed": 60, "maxSpeed": 450});

$(window).on('load', function() { //insync with preloader finish
  if (intropresent == true) {
      theater.play();
      $('.twentytwenty-handle').mousedown( function() {
        $('.prompt').fadeOut();
      });
  };
});

$(function() {
  // Varibles after DOM construction
  var objIntro = $('#intro');
  // -------------------
  console.log("JQuery Version: " + $.fn.jquery );
  if (objIntro !== undefined) {
    intropresent = true;
    $(window).scroll(function () {
      if (objIntro.hasClass('hidden') == false) {
        hideIntro(objIntro);
      }
    });
  };

  //scroll Reveal
  window.sr = ScrollReveal();
  sr.reveal('#mini-skills .col',{origin: 'left', delay: '250', distance: '40px'});

  $('#before-after').imagesLoaded( function() {
    $('#before-after').twentytwenty({
      default_offset_pct: 0.30
    });
  });

  //theater
  theater.addActor('typer').addScene('typer:...',3000).addScene('typer:Coder.',2000).addScene('typer:Designer.',2000).addScene('typer:Technology Lover.',2000).addScene('typer:Nerd?',500).addScene(theater.replay);


  $("#featured-projects .owl-carousel").owlCarousel({
    margin: 20,
    center: true,
    dotsEach: true,
    loop: true
  });
});

hideIntro = function(obj) {
  window.scrollTo(0,0);
  // animate it away
  theater.stop();
  theater = null;
  obj.animateCss('bounceOutUp');
    obj.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
      window.scrollTo(0,0);
      obj.addClass('hidden');
    });
}

$.fn.extend({
    animateCss: function (animationName) {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        this.addClass('animated ' + animationName).one(animationEnd, function() {
            $(this).removeClass('animated ' + animationName);
        });
    }
});
