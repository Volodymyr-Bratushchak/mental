(function($, Drupal){
  // Drupal.behaviors.VideoInsert = {
  // attach: function (context, settings) {
  var iframe = document.createElement('iframe');
  iframe.src = "http://www.youtube.com/embed/Ugcc_1hPvsk";
  iframe.id = "youtubelist-frame";
  iframe.title = "Video player";
  iframe.width = "100%";
  iframe.height = "250px";
  iframe.frameborder = "0";
  $(".video-item:nth-child(2)").after(iframe);
  $('#youtubelist-frame').wrap( "<div><div><p>SCATTERBRAINED</p><p>Everything You Need to Know about the Holidays</p></div><p>MORE SCATTERBRAINED VIDEOS</p>" );
  console.log(iframe);
  // }
  // }
})(jQuery, Drupal);