(function ($) {
  $('#sections a').off().on('click',(function () {
    event.preventDefault();
    $('#news_section').remove(); // Delete existing
    $('.default_section').remove(); // Delete default

    var url = $(this).attr("href");
    var items = [];
    $.getJSON(url, function (data) {
      $.each(data, function (key, node) {
        items.push( "<div id='" + node.nid + "'><a href='/node/" + node.nid + "'>" + node.title + "<img src='" + node.image + "'></a></div>" );
      });
      $( "<div/>", {
        "id": "news_section",
        html: items.join( "" )
      }).appendTo( "#news_block" );
    });
  }));
})(jQuery);
