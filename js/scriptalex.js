$(document).ready(function(){
  $('.sidenav').sidenav();
  $('.carousel.carousel-slider').carousel({
    fullWidth: true
  });
  $(".dropdown-trigger").dropdown({
    coverTrigger: false
  });
  $('.parallax').parallax();
});
$('.main_title').click(function(){
  window.open('easteregg.html');
})
