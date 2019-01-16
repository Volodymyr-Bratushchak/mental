(function ($, window, Drupal, drupalSettings) {
  'use strict';


  Drupal.behaviors.testNodeLoad = {
    //   // For anchor tags, these will go to the target of the anchor rather
    attach: function (context, settings) {
      console.log('222');
      $('.load_more_chess a').once('ajax').each(function () {
        var element_settings = {};
        // Clicked links look better with the throbber than the progress bar.
        element_settings.progress = {type: 'throbber'};
        // than the usual location.
        var href = $(this).attr('href');
        if (href) {
          element_settings.url = href;
          element_settings.event = 'click';
        }
          element_settings.method = 'html';
          element_settings.wrapper = 'chess-view-content';
          element_settings.element = this;
          Drupal.ajax(element_settings);
          // Selector куда будем загружать page.
          // $(".load_more_chess").once().append("<div><a id='del-1' href='/chess-view?page=3'>Load more</a></div>");
          // $(" #del ").remove();
      });
       // $(".load_more_chess").once().append("<div><a id='del' href='/chess-view?page=1'>Load more</a></div>");
    }
  };
})(jQuery, window, Drupal, drupalSettings);