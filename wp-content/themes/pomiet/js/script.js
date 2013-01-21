(function($) {
  // Create the dropdown base
   $("<select />").appendTo("header .main-navigation");
   
   // Create default option "Go to..."
   $("<option />", {
      "selected": "selected",
      "value"   : "",
      "text"    : "Go to..."
   }).appendTo("nav select");
   
   // Populate dropdown with menu items
   $("header .main-navigation a").each(function() {
    var el = $(this);
    $("<option />", {
        "value"   : el.attr("href"),
        "text"    : el.text()
    }).appendTo("header .main-navigation select");
   });
   
  // To make dropdown actually work
  // To make more unobtrusive: http://css-tricks.com/4064-unobtrusive-page-changer/
   $("header .main-navigation select").change(function() {
     window.location = $(this).find("option:selected").val();
   });
 })(this.jQuery);