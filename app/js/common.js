
$(document).ready(function() {
  $(".nav-mobile").on("click",topMenuManipulation);
  function topMenuManipulation(){
    $(".header-top__menu-mobile").toggleClass("active-mob");
  }

    var clock1;
    clock1 = $('.attention__mytimer1').FlipClock({
        clockFace: 'HourlyCounter',
        language:'ru-ru',
        autoStart: false,
        callbacks: {
            stop: function() {
                $('.message').html('The clock has stopped!')
            }
        }
    });

    var clock2;
    clock2 = $('.attention__mytimer2').FlipClock({
        clockFace: 'HourlyCounter',
        language:'ru-ru',
        autoStart: false,
        callbacks: {
            stop: function() {
                $('.message').html('The clock has stopped!')
            }
        }
    });
    clock1.setTime(48695);
    clock1.setCountdown(true);
    clock1.start();

    clock2.setTime(48695);
    clock2.setCountdown(true);
    clock2.start();

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

    $( ".faq__accordion" ).accordion();
});