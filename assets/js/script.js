"use strict";

jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる
  var topBtn = $('.pagetop');
  topBtn.hide(); // ボタンの表示設定

  $(window).scroll(function () {
    if ($(this).scrollTop() > 70) {
      // 指定px以上のスクロールでボタンを表示
      topBtn.fadeIn();
    } else {
      // 画面が指定pxより上ならボタンを非表示
      topBtn.fadeOut();
    }
  }); // ボタンをクリックしたらスクロールして上に戻る

  topBtn.click(function () {
    $('body,html').animate({
      scrollTop: 0
    }, 300, 'swing');
    return false;
  }); // //ドロワーメニュー
  // $("#MenuButton").click(function () {
  //   // $(".l-drawer-menu").toggleClass("is-show");
  //   // $(".p-drawer-menu").toggleClass("is-show");
  //   $(".js-drawer-open").toggleClass("open");
  //   $(".drawer-menu").toggleClass("open");
  //   $("html").toggleClass("is-fixed");
  // });
  // スムーススクロール (絶対パスのリンク先が現在のページであった場合でも作動)

  $(document).on('click', 'a[href*="#"]', function () {
    var time = 400;
    var header = $('.header').innerHeight();
    var target = $(this.hash);
    if (!target.length) return;
    var targetY = target.offset().top - header;
    $('html,body').animate({
      scrollTop: targetY
    }, time, 'swing');
    return false;
  }); //ドロワーメニュー

  var scrollpos;
  $(".js-hamburger").click(function () {
    if ($('.hamburger').hasClass('is-active')) {
      $('body').removeClass('fixed').css({
        'top': 0
      });
      window.scrollTo(0, scrollpos);
      $('.hamburger').removeClass('is-active');
      $('.header').removeClass('is-active');
      $('.sp-nav').fadeOut();
      $(".sp-nav").removeClass('panelactive'); //ナビゲーションのpanelactiveクラスを除去

      $(".circle-bg").removeClass('circleactive'); //丸背景のcircleactiveクラスを除去
    } else {
      scrollpos = $(window).scrollTop();
      $('body').addClass('fixed').css({
        'top': -scrollpos
      });
      $('.hamburger').addClass('is-active');
      $('.header').addClass('is-active');
      $('.sp-nav').fadeIn();
      $(".sp-nav").addClass('panelactive'); //ナビゲーションにpanelactiveクラスを付与

      $(".circle-bg").addClass('circleactive'); //丸背景にcircleactiveクラスを付与
    }
  });
  var start_position = 0,
      //初期位置０
  window_position,
      $window = $(window),
      $header = $('.header'),
      $footer = $('footer'); // スクロールイベントを設定

  $window.on('scroll', function () {
    // スクロール量の取得
    window_position = $(this).scrollTop(); // スクロール量が初期位置より小さければ，
    // 上にスクロールしているのでヘッダーフッターを出現させる

    if (window_position <= start_position) {
      $header.css('top', '0');
      $footer.css('bottom', '0');
    } else {
      $header.css('top', '-180px');
      $footer.css('bottom', '-70px');
    } // 現在の位置を更新する


    start_position = window_position;
  }); // 中途半端なところでロードされても良いようにスクロールイベントを発生させる

  $window.trigger('scroll'); // SWIPER(main-view)

  var mySwiper = new Swiper('.swiper-container', {
    direction: 'vertical',
    effect: 'slide',
    slidesPerView: 1,
    loop: true,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false //ユーザー操作後に自動再生を再開する

    },
    speed: 2000,
    //２秒かけながら次の画像へ移動
    allowTouchMove: false //マウスでのスワイプを禁止

  }); //serviceセクション背景切り替え

  $(function () {
    // hoverする要素のclass名
    $(".js-btn--01").hover(function () {
      // hoverした時の処理(classを付与)
      $(".service-card__subtitle--02").addClass("js-hover");
      $(".service-card__subtitle--03").addClass("js-hover");
      $(".service-card__title--02").addClass("js-hover");
      $(".service-card__title--03").addClass("js-hover");
      $(".button--02").addClass("js-button");
      $(".button--03").addClass("js-button");
      $(".button--02 span").addClass("js-span");
      $(".button--03 span").addClass("js-span");
    }, function () {
      // hoverを外した時の処理(classを外す)
      $(".service-card__subtitle--02").removeClass("js-hover");
      $(".service-card__subtitle--03").removeClass("js-hover");
      $(".service-card__title--02").removeClass("js-hover");
      $(".service-card__title--03").removeClass("js-hover");
      $(".button--02").removeClass("js-button");
      $(".button--03").removeClass("js-button");
      $(".button--02 span").removeClass("js-span");
      $(".button--03 span").removeClass("js-span");
    });
  });
  $(function () {
    // hoverする要素のclass名
    $(".js-btn--02").hover(function () {
      // hoverした時の処理(classを付与)
      $(".service-card__subtitle--01").addClass("js-hover");
      $(".service-card__subtitle--03").addClass("js-hover");
      $(".service-card__title--01").addClass("js-hover");
      $(".service-card__title--03").addClass("js-hover");
      $(".button--01").addClass("js-button");
      $(".button--03").addClass("js-button");
      $(".button--01 span").addClass("js-span");
      $(".button--03 span").addClass("js-span");
    }, function () {
      // hoverを外した時の処理(classを外す)
      $(".service-card__subtitle--01").removeClass("js-hover");
      $(".service-card__subtitle--03").removeClass("js-hover");
      $(".service-card__title--01").removeClass("js-hover");
      $(".service-card__title--03").removeClass("js-hover");
      $(".button--01").removeClass("js-button");
      $(".button--03").removeClass("js-button");
      $(".button--01 span").removeClass("js-span");
      $(".button--03 span").removeClass("js-span");
    });
  });
  $(function () {
    // hoverする要素のclass名
    $(".js-btn--03").hover(function () {
      // hoverした時の処理(classを付与)
      $(".service-card__subtitle--01").addClass("js-hover");
      $(".service-card__subtitle--02").addClass("js-hover");
      $(".service-card__title--01").addClass("js-hover");
      $(".service-card__title--02").addClass("js-hover");
      $(".button--01").addClass("js-button");
      $(".button--02").addClass("js-button");
      $(".button--01 span").addClass("js-span");
      $(".button--02 span").addClass("js-span");
    }, function () {
      // hoverを外した時の処理(classを外す)
      $(".service-card__subtitle--01").removeClass("js-hover");
      $(".service-card__subtitle--02").removeClass("js-hover");
      $(".service-card__title--01").removeClass("js-hover");
      $(".service-card__title--02").removeClass("js-hover");
      $(".button--01").removeClass("js-button");
      $(".button--02").removeClass("js-button");
      $(".button--01 span").removeClass("js-span");
      $(".button--02 span").removeClass("js-span");
    });
  });
  $(function () {
    // ①マウスをボタンに乗せた際のイベントを設定
    $('.js-service').hover(function () {
      // ②乗せたボタンに連動したメガメニューをスライドで表示させる
      $(this).find('.tab-service').stop().slideDown();
      $(".tab-service__text").css('transition', '0.4s'); // ③マウスをボタンから離した際のイベントを設定
    }, function () {
      // ④マウスを離したらメガメニューをスライドで非表示にする
      $(this).find('.tab-service').stop().slideUp();
      $(".tab-service__text").css('transition', '');
    });
  });
  AOS.init(); //SWIPER(ABOUT)
  // var slider1 = new Swiper ('.swiper', {
  //   loop:true,
  //   slidesPerView: 2.5, // 一度に表示する枚数
  //   spaceBetween:4,
  //   speed: 6000, // ループの時間
  //   autoplay: {
  //     delay: 0, // 途切れなくループ
  //   },
  //   breakpoints: {
  //     // 768px以上の場合
  //     768: {
  //     slidesPerView: 3, // 一度に表示する枚数
  //     spaceBetween:10,
  //     },
  //   }
  // });

  var swiper = new Swiper(".swiper", {
    loop: true,
    slidesPerView: 2.5,
    // 一度に表示する枚数
    spaceBetween: 4,
    speed: 6000,
    // ループの時間
    autoplay: {
      delay: 0 // 途切れなくループ

    },
    breakpoints: {
      768: {
        slidesPerView: 3,
        spaceBetween: 10
      }
    },
    on: {
      resize: function resize() {
        swiper.autoplay.start();
      }
    }
  });
  $(document).ready(function () {
    var bet1stheight = $(".js-tab-group").height(); //ナビの高さ

    var between1st = $(".js-panel-group").offset().top; //コンテンツのページ上部からの位置

    var between2nd = $(".js-panel-group").outerHeight(); //コンテンツの高さ

    var endline = between2nd + between1st - bet1stheight; //追従終了の位置

    $(window).scroll(function () {
      var scrollY = $(window).scrollTop(); //現在のスクロール位置

      if (scrollY <= between1st) {
        if (window.matchMedia('(max-width: 767px)').matches) {
          //スマホ処理
          $(".js-tab-group").css({
            "position": "static",
            "top": "auto",
            "bottom": "auto"
          });
        } else if (window.matchMedia('(min-width:768px)').matches) {
          //PC処理
          $(".js-tab-group").css({
            "position": "relative",
            "top": "auto",
            "bottom": "auto"
          });
        }
      } else if (scrollY > between1st && scrollY < endline) {
        if (window.matchMedia('(max-width: 767px)').matches) {
          //スマホ処理
          $(".js-tab-group").css({
            "position": "static",
            "top": "auto",
            "bottom": "auto"
          });
        } else if (window.matchMedia('(min-width:768px)').matches) {
          //PC処理
          $(".js-tab-group").css({
            "position": "fixed",
            "top": "0",
            "bottom": "auto"
          });
        }
      } else {
        if (window.matchMedia('(max-width: 767px)').matches) {
          //スマホ処理
          $(".js-tab-group").css({
            "position": "relative",
            "top": 0,
            "bottom": "auto"
          });
          $(".js-panel-group").css({// "position" : "absolute"
          });
        } else if (window.matchMedia('(min-width:768px)').matches) {
          //PC処理
          $(".js-tab-group").css({
            "position": "absolute",
            "top": 0,
            "bottom": "auto"
          }); // $(".js-panel-group").css({
          //   "margin-" : "auto",
          // });
        }
      }
    });
  });
  jQuery(function ($) {
    $('.js-tab').click(function () {
      $('.is-active').removeClass('is-active');
      $(this).addClass('is-active');
      $('.is-show').removeClass('is-show'); // クリックしたタブからインデックス番号を取得

      var index = $(this).index(); // クリックしたタブと同じインデックス番号をもつコンテンツを表示

      $('.js-panel').eq(index).addClass('is-show');
    });
  });
});