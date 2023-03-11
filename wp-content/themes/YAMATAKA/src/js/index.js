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
  //スマホ用メニュー
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

  //1文字ずつ出現
  function EachTextAnimeControl() {
    $(".eachTextAnime").each(function () {
      let elemPos = $(this).offset().top - 50;
      let scroll = $(window).scrollTop();
      let windowHeight = $(window).height();

      if (scroll >= elemPos - windowHeight) {
        $(this).addClass("appeartext");
      } else {
        $(this).removeClass("appeartext");
      }
    });
  }

  $(window).on("load", function () {
    const element = $(".eachTextAnime");
    element.each(function () {
      let text = $(this).text();
      let textbox = "";
      text.split("").forEach(function (t, i) {
        if (t !== " ") {
          if (i >= 0) {
            textbox +=
              '<span style="animation-delay:' +
              (i * 100 + 1000) +
              'ms;">' +
              t +
              "</span>";
          }
          // } else {
          //   let n = i / 10;
          //   textbox +=
          //     '<span style="animation-delay:' + n + 's;">' + t + "</span>";
          // }
          if (i === 6 || i === 14) {
            textbox += "<br>";
          }
        } else {
          textbox += t;
        }
      });
      $(this).html(textbox);
    });
    EachTextAnimeControl();
  });
  //お知らせ切り替え
  $(".important_title").on("click", function () {
    $(".news_content_new").removeClass("news_back");
    $(".news_content_new").addClass("news_back2");
    console.log("999");
  });
  $(".new_title").on("click", function () {
    $(".news_content_new").removeClass("news_back2");
    $(".news_content_new").addClass("news_back");
    console.log("999");
  });

  //footer list 余白調整
  $(".footer_info_list li").each(function (index, element) {
    // element == this
    if (!$(this).hasClass("head")) {
      $(this).css({ "margin-left": "15px" });
    }
  });
  //load
  // $(window).on("load", function () {
  //   $(".front_body").fadeIn(1500);
  // });

  //レスポンシブ注意書き
  $(window).resize(function () {
    $nowWidth = $(".careful_content_txt_main").width();

    if ($nowWidth < 768) {
      $(".careful_content_txt_main").html(
        '<p class="careful_content_txt_main">こちらまでお電話いただけますよう<br>よろしくお願いいたします。</p>'
      );
    }
  });
});
