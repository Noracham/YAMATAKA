const $ = jQuery.noConflict();
$(function () {
  $(window).on("load scroll", function () {
    $header_place = $(window).scrollTop();

    if ($header_place > 0) {
      $(".header").css({ height: "70px", background: "#fff" });
    } else {
      $(".header").css({
        height: "75px",
        background: "rgba(255,255,255,0.75)",
      });
    }
  });
});
