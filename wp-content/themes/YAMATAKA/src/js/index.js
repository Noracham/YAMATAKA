const $ = jQuery.noConflict();
$(function () {
  $(window).on("load scroll", function () {
    $header_place = $(window).scrollTop();

    if ($header_place > 0) {
      $(".header").css({ height: "65px", background: "#fff" });
    } else {
      $(".header").css({
        height: "70px",
        background: "rgba(255,255,255,0.75)",
      });
    }
  });
  let visible = true;
  $(".header_nav_sp").on("click", function () {
    if (visible == true) {
      $(this).addClass("menu_visible");
      visible = false;

      $(".sp_menu").animate({ right: "0" }, 500);
    } else {
      $(this).removeClass("menu_visible");
      visible = true;
      $(".sp_menu").animate({ right: "-100vw" }, 500);
    }
  });
  $(".trigger").on("click", function () {
    $(".header_nav_sp").removeClass("menu_visible");
    visible = true;
    $(".sp_menu").animate({ right: "-100vw" }, 500);
  });
});
