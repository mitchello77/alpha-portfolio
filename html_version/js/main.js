// Varibles
var keys = {37: 1, 38: 1, 39: 1, 40: 1};
$(function() {
  // Varibles after DOM construction
  var objIntro = $('#intro');
  // -------------------
  console.log("JQuery Version: " + $.fn.jquery );
  if (objIntro !=== undefined) {
    $(window).scroll(function () {
      if (objIntro.hasClass('hidden') == false) {
        hideIntro(objIntro);
      }
    });
  }

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

hideIntro = function(obj) {
  window.scrollTo(0,0);
  // animate it away
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
