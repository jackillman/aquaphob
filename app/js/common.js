var clock
$(document).ready(function() {


    clock = $('.mytimer').FlipClock({
        clockFace: 'TwentyFourHourClock',
        countdown:true
        }); 
    clock.setTime(250);
    clock.start();


    $('.problems__slider').slick({
        infinite:true,
        
        slidesToShow:2,
        slidesToScroll:2,
        arrows: true,
        prevArrow: '<div class="prev"><i class="fa fa-long-arrow-left fa-2x" aria-hidden="true"></i></div>',
        nextArrow: '<div class="next"><i class="fa fa-long-arrow-right fa-2x" aria-hidden="true"></i></div>',
        responsive: [
            {
              breakpoint: 992,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                dots: true
              }
            },
            // {
            //   breakpoint: 600,
            //   settings: {
            //     slidesToShow: 2,
            //     slidesToScroll: 2
            //   }
            // },
            {
              breakpoint: 767,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
          ]
    
    
    
    });

    $('.reviews__slider').slick({
        infinite:true,
        
        slidesToShow:2,
        slidesToScroll:2,
        arrows: true,
       
        responsive: [
            {
              breakpoint: 992,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                dots: true
              }
            },
            // {
            //   breakpoint: 600,
            //   settings: {
            //     slidesToShow: 2,
            //     slidesToScroll: 2
            //   }
            // },
            {
              breakpoint: 767,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
          ]
    
    
    
    });

    $( ".faq__accordion" ).accordion();
});