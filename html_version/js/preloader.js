var loading_screen = window.pleaseWait({
  logo: "img/logo-50px.png",
  backgroundColor: '#2C3E50',
  loadingHtml: " <div class='sk-folding-cube'><div class='sk-cube1 sk-cube'></div><div class='sk-cube2 sk-cube'></div><div class='sk-cube4 sk-cube'></div><div class='sk-cube3 sk-cube'></div></div> <p class='loading-message'>A good day to you fine user!</p>"
});

 $(window).on('load', function() { // makes sure the whole site is loaded
   loading_screen.finish()
 });
