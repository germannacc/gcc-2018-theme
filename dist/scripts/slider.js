$(document).ready(function() {

  //Init the carousel
  $(".owl-carousel").owlCarousel({
    loop: true,
    lazyLoad: true,
    margin:0,
    autoplay:true,
    autoplayTimeout:10000,
    stagePadding:0,
    mouseDrag: false,
    smartSpeed:500,
    items: 1,
    autoHeight:true
});

});