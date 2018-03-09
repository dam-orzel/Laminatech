$(document).ready(function(){
      $('.type-slider').slick({
          autoplay: true,
          autoplaySpeed: 5000,
          infinite: true,
          slidesToShow: 1,
          slidesToScroll: 1,
          arrow: true,
          dots: true,
      });
    });

    $(document).ready(function(){
          $('.type-slider-tablet').slick({
              autoplay: true,
              autoplaySpeed: 5000,
              infinite: true,
              slidesToShow: 2,
              slidesToScroll: 1,
              arrow: true,
              dots: true,
          });
        });
