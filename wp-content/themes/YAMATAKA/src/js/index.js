const $ = jQuery.noConflict();
$(function () {
  $(window).on("load scroll", function () {
    $header_place = $(window).scrollTop();

    if ($header_place > 0) {
      $(".header").css({
        height: "65px",
        background: "#fff",
        "box-shadow": "#00000041 0 3px 5px",
      });
      $(".header_nav_list li a").css({ color: "#1b5d00" });
      $(".header_nav_list li a").addClass("scroll_link_green");
      $(".header_nav_list li a").removeClass("scroll_link_white");
      $("g ellipse,g text").css({ fill: "#1b5d00" });
    } else {
      $(".header").css({
        height: "70px",
        background: "rgba(255,255,255,0.00)",
        "box-shadow": "none",
      });
      $(".header_nav_list li a").css({ color: "#fff" });
      $(".header_nav_list li a").addClass("scroll_link_white");
      $(".header_nav_list li a").removeClass("scroll_link_green");
      $("g ellipse,g text").css({ fill: "#fff" });
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
              (i * 100 + 500) +
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
  $(window).on("load", function () {
    $(".front_body").fadeIn(1500);
  });

  //レスポンシブ注意書き
  $(window).resize(function () {
    $nowWidth = $(".careful_content_txt_main").width();

    if ($nowWidth < 768) {
      $(".careful_content_txt_main").html(
        '<p class="careful_content_txt_main">こちらまでお電話いただけますよう<br>よろしくお願いいたします。</p>'
      );
    }
  });

  //inview スクロールイベント
  //クラスリスト
  let LtoR = [
    "news_list",
    "viewmore",
    "access_content_info_txt",
    "department_content_one",
    "hospital_info_content_arrow div",
  ];
  let TtoB = ["know_content", "departmentM_content", "doctor_content"];
  let opa_bl = ["sub_title", "access_content_map", "circle_wrapper"];

  //left to right
  $.each(LtoR, function (i, v) {
    let val = "." + v;

    $(val).one("inview", function (e) {
      $(this).addClass("left_to_right");
    });
  });
  //top to bottom
  $.each(TtoB, function (i, v) {
    let val = "." + v;

    $(val).one("inview", function (e) {
      $(this).addClass("top_to_bottom");
    });
  });

  //opacity blur
  $.each(opa_bl, function (i, v) {
    let val = "." + v;

    $(val).one("inview", function (e) {
      $(this).addClass("opacity_blur");
    });
  });
});
