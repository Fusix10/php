$(document).ready(function(){
  $('.sidenav').sidenav();
  $('.carousel.carousel-slider').carousel({
    fullWidth: true
  });
  $(".dropdown-trigger").dropdown({
    coverTrigger: false
  });
  setInterval(function(){
  $('.move').carousel('next')
    }, 3000);
});

$("#monid").click(function(){
  $("vide").show()
})
