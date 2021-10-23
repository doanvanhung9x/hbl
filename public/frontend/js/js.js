



var swiper = new Swiper(".mySwiper", {
slidesPerView: 1,
spaceBetween: 30,
freeMode: true,
pagination: {
    el: ".swiper-pagination",
    clickable: true,
},
});
  



$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        800:{
          items:3
      },
        1000:{
            items:4
        }
    }
})




var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    slidesPerGroup: 3,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });


      var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
  $(".btn-sidebar").on("click", function(){
    var margin = $(".sidebar").css("margin-left");
    if(margin == "-320px") 
    {
      $(".sidebar").css("margin-left","0px")
    }
  });
  $(".btn-exit").on("click", function(){
    var margin = $(".sidebar").css("margin-left");
    if(margin == "0px") 
    {
      $(".sidebar").css("margin-left","-320px")
    }
  });


      