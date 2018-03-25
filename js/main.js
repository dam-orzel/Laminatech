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

        function initMap() {
                var uluru = {lat: -25.363, lng: 131.044};
                var map = new google.maps.Map(document.getElementById('map'), {
                  zoom: 4,
                  center: uluru
                });
                var marker = new google.maps.Marker({
                  position: uluru,
                  map: map
                });
              }
