$('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
if ($(".toggle .toggle-title").hasClass("active")) {
    $(".toggle .toggle-title.active")
      .closest(".toggle")
      .find(".toggle-inner")
      .show();
}
  $(".toggle .toggle-title").click(function() {
    if ($(this).hasClass("active")) {
      $(this)
        .removeClass("active")
        .closest(".toggle")
        .find(".toggle-inner")
        .slideUp(200);
    } else {
      $(this)
        .addClass("active")
        .closest(".toggle")
        .find(".toggle-inner")
        .slideDown(200);
    }
  });