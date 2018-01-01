
$(document).ready(function() {
  $(".nav-mobile").on("click",topMenuManipulation);
  function topMenuManipulation(){
    $(".header-top__menu-mobile").toggleClass("active-mob");
    $(".nav-mobile").toggleClass("active");
  }

    $(".mymenu").on("click","a", function (event) {
      //отменяем стандартную обработку нажатия по ссылке
      event.preventDefault();
      //забираем идентификатор бока с атрибута href
      var id  = $(this).attr('href'),
      //узнаем высоту от начала страницы до блока на который ссылается якорь
        top = $(id).offset().top;
      //анимируем переход на расстояние - top за 1500 мс
      $('body,html').animate({scrollTop: top}, 1500);
    });


		$('.theory__content').readmore({
			maxHeight: 400,
			moreLink: '<a class="more-text" href="#">Подробнее</a>',
			lessLink: '<a class="more-text" href="#">Скрыть</a>'
		});
	

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

   // $( ".faq__accordion" ).accordion();
});


$(document).ready(function() {
  //прикрепляем клик по заголовкам acc-head
  $('#accordeon .acc-head').on('click', f_acc);
  $('#accordeon .acc-body').not($(this).next()).slideUp(1000);
  
});
 
function f_acc(){
  $(this).removeClass("acc-active");
//скрываем все кроме того, что должны открыть
  $('#accordeon .acc-body').not($(this).next()).slideUp(1000,function(){
    $(this).prev().removeClass("acc-active");
  });
  $(this).addClass("acc-active");
// открываем или скрываем блок под заголовком, по которому кликнули
    $(this).next().slideToggle(2000);
    
}


