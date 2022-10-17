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
  }); //ドロワーメニュー

  $("#MenuButton").click(function () {
    // $(".l-drawer-menu").toggleClass("is-show");
    // $(".p-drawer-menu").toggleClass("is-show");
    $(".js-drawer-open").toggleClass("open");
    $(".drawer-menu").toggleClass("open");
    $("html").toggleClass("is-fixed");
  }); // スムーススクロール (絶対パスのリンク先が現在のページであった場合でも作動)

  $(document).on('click', 'a[href*="#"]', function () {
    var time = 400;
    var header = $('header').innerHeight();
    var target = $(this.hash);
    if (!target.length) return;
    var targetY = target.offset().top - header;
    $('html,body').animate({
      scrollTop: targetY
    }, time, 'swing');
    return false;
  });


  $(".js-hamburger").click(function () {
    if ($('.js-hamburger').hasClass('is-active')) {
      $(".js-hamburger").removeClass("is-active");
      $(".js-header").removeClass("is-active");
      $(".js-sp-nav").fadeOut();
    } else {
      $(".js-hamburger").addClass("is-active");
      $(".js-header").addClass("is-active");
      $(".js-sp-nav").fadeIn();
    }
  });
  $(".js-sp-nav").click(function () {
    $(".js-hamburger").removeClass("is-active");
    $(".js-header").removeClass("is-active");
    $(".js-sp-nav").fadeOut();
  });






  window.addEventListener('load', function () {
    var mySwiper = new Swiper(".swiper-container", {
      loop: true,
      //ループさせる
      // effect: "fade",
      //フェードのエフェクト
      autoplay: {
        delay: 4000,
        //４秒後に次の画像へ
        disableOnInteraction: false //ユーザー操作後に自動再生を再開する

      },
      speed: 2000,
      //２秒かけながら次の画像へ移動
      allowTouchMove: false //マウスでのスワイプを禁止

    });
  }); 
});