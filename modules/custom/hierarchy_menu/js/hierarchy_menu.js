(function ($) {
  $('#block_hierarchy_menu h3').off().on('click',(function () {

    $('#drop, #close').remove(); // Delete existing drop list
    $(this).after('<div id="close"><p>Close</p></div>');
    // takes JSON object with the right branch of taxonomy tree
    // Converts the information into html and adds to active block
    var url = '/hierarchy_menu/';
    var items = [];
    $.getJSON(url, function (data) {
      $.each(data, function (key, val) {
        items.push( "<li id='" + val.nid + "'><a href='/node/" + val.nid + "'>" + val.title + "<img src='" + val.image + "'></a></li>" );
      });
      $( "<ul/>", {
        "id": "drop",
        html: items.join( "" )
      }).appendTo( "#block_hierarchy_menu" );
    });
    $('#close').click(function() {
      $('#drop, #close').remove();
      // this.remove();
    });
  }));
})(jQuery);
