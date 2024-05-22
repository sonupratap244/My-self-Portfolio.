$(document).ready(function(){
  $(window).scroll(function(){
    if(this.scrollY > 15){
      $('.nav').addClass("sticky");
    }else{
      $('.nav').removeClass("sticky");
    }
    if(this.scrollY > 400){
      $('.scroll-up-btn').addClass("show");
    }else{
      $('.scroll-up-btn').removeClass("show");
    }
  });
    $('.togelbtn').click(function(){
      $('.navlink').toggleClass("active");
      $('.togelbtn i').toggleClass("active");
  });
 

  $('.scroll-up-btn').click(function(){
    $('html').animate({scrollTop: 0});
  });
   var typed = new Typed(".typing", {
      strings: ["Web Developer", "Teacher."],
      typeSpeed: 100,
      backSpeed: 60,
      loop: true
   });
    var typed = new Typed(".typing-2", {
      strings: ["Web Developer", "Teacher."],
      typeSpeed: 100,
      backSpeed: 60,
      loop: true
   });

});
