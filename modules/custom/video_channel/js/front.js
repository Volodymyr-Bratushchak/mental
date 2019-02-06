(function ($) {
  Drupal.behaviors.initSlider = {
    attach: function (context, settings) {
      $(document).ready(function(){
        $('.youtube_slider').slick({
          dots: false,
          infinite: false,
          speed: 300,
          slidesToShow: 5,
          slidesToScroll: 3,
          focusOnSelect: true,
          arrows: true,

        });
      });
    }
  };
})(jQuery);

