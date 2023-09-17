/*======================== owl carousel  ==============*/

$(document).ready(function(){
    $(".index-banner-slider").owlCarousel({
        items:1,
        loop:true,
        autoplay:true,
        autoplayHoverPause:true,
        nav:true,
    });
  });

// index causes slider 
$(document).ready(function(){
    $(".index-causes-slider").owlCarousel({
        items:1,
        loop:true,
        autoplay:true,
        autoplayHoverPause:true,
        nav:true,
    });
  });


  // TESTIMONIAL SLIDER 
  $('.testimonial_owlCarousel').owlCarousel({
    loop:true,
    margin:10,
    dots:false,
    nav:true,
    autoplay:false,   
    smartSpeed: 3000, 
    autoplayTimeout:4000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});

//  news card slider is start here 


  $("#news-slider").owlCarousel({
      items : 2,
      itemsDesktop : [1199,2],
      itemsMobile : [600,1],
      pagination :true,
      autoPlay : true,
      loop:true,
  });
  // our partner slider index 
  $(".ourpartner_slider_index").owlCarousel({
      items : 4,
      itemsDesktop : [1199,2],
      itemsMobile : [600,1],
      autoPlay : true,
      loop:true,
  });



// ==============================


