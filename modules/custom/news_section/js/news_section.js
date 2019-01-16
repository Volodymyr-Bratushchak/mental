(function ($) {
  $('#sections a').off().on('click',(function () {
    event.preventDefault();
    $('#news_section').remove(); // Delete existing
    var url = $(this).attr("href");
    var items = [];
    $.getJSON(url, function (data) {
      $.each(data, function (key, val) {
        items.push( "<div id='" + val.nid + "'><a href='/node/" + val.nid + "'>" + val.title + "<img src='" + val.image + "'></a></div>" );
      });
      $( "<div/>", {
        "id": "news_section",
        html: items.join( "" )
      }).appendTo( "#news_block" );
    });
  }));
})(jQuery);
