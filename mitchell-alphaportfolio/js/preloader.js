var loading_screen = window.pleaseWait({
  logo: "http://cdn.mitchell-williams.com.au/alpha-portfolio/img/logo-100pxh.png",
  backgroundColor: '#2C3E50',
  loadingHtml: " <div class='sk-folding-cube'><div class='sk-cube1 sk-cube'></div><div class='sk-cube2 sk-cube'></div><div class='sk-cube4 sk-cube'></div><div class='sk-cube3 sk-cube'></div></div> <p class='loading-message'>Downloading more RAM ... Please Wait</p>"
});
(function($) {
   $(window).on('load', function() { // makes sure the whole site is loaded
     loading_screen.finish()
   });
})( jQuery );
