(function ($) {
  Drupal.behaviors.Slider = {
    attach: function (context, settings) {
      $(document).ready(function(){
        $('.art-slider').slick({
          autoplay: true,
          autoplaySpeed: 5000,
          dots: true,
          infinite: true,
          speed: 500,
          fade: true,
          cssEase: 'linear'
        });
      });
    }
  };
})(jQuery);

