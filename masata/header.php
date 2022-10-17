<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <!-- <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <meta name=”robots” content=”noindex”>
    <!-- meta情報 -->
    <title></title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!-- ogp -->
    <meta property="og:title" content="CodeUps" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://max-log.conohawing.com/max_codeups/" />
    <meta property="og:image" content="images/common/works_1.jpg" />
    <meta property="og:site_name" content="CodeUps" />
    <meta property="og:description" content="株式会社CodeUpsのホームページです。"/>
    <!-- ファビコン -->
    <link rel="icon" href="<?php echo get_template_directory_uri() ?>/assets/images/common/favicon.ico"/>
    <!-- font family -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Noto+Sans+JP:wght@300;400;500;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Noto+Sans+JP:wght@300;400;500;700&family=Noto+Serif+JP:wght@300;400;500;700&display=swap" rel="stylesheet"/>
    <!-- css -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/styles.css"/> -->
    <!-- JavaScript -->
    <!-- <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/swiper@4.5.1/dist/css/swiper.min.css"/> -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"></script>
    <!-- <script src="//cdn.jsdelivr.net/npm/swiper@4.5.1/dist/js/swiper.min.js"></script> -->
    <!-- <script defer src="<?php echo get_template_directory_uri() ?>../../assets/js/script.js"></script> -->
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="header">
      <div class="header__inner js-header">
        <h1 class="header__title">
          <a href="#" class="header__logo">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/sp-logo.svg" alt="LUSSO">
          </a><!-- /.header__logo -->
        </h1><!-- /.header__title -->
        <div class="header__drawer hamburger js-hamburger">
          <span></span>
          <span></span>
          <span></span>
        </div><!-- /.header__drawer -->
        <nav class="header__pc-nav pc-nav">
          <ul class="pc-nav__items">
            <li class="pc-nav__item">
              <a href="news.html">top</a>
            </li><!-- /.pc-nav__item -->
            <li class="pc-nav__item">
              <a href="test.html">about</a>
            </li><!-- /.pc-nav__item -->
            <li class="pc-nav__item">
              <a href="#works">service</a>
            </li><!-- /.pc-nav__item -->
            <li class="pc-nav__item">
              <a href="#overview">works</a>
            </li><!-- /.pc-nav__item -->
            <li class="pc-nav__item">
              <a href="blog.html">news</a>
            </li><!-- /.pc-nav__item -->
            <li class="pc-nav__item">
              <a href="#contact">contact</a>
            </li><!-- /.pc-nav__item -->
          </ul><!-- /.pc-nav__items -->
        </nav><!-- /.p-header__pc-nav -->

        <nav class="header__sp-nav sp-nav js-sp-nav">
        <h1 class="sp-nav__title">
          <a href="#" class="sp-nav__logo">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/drawer-logo.svg" alt="LUSSO">
          </a><!-- /.header__logo -->
        </h1>
          <ul class="sp-nav__items">
            <li class="sp-nav__item">
              <a href="#">top</a>
            </li><!-- /"sp-nav__item -->
            <li class="sp-nav__item">
              <a href="#news">about</a>
            </li><!-- /"sp-nav__item -->
            <li class="sp-nav__item">
              <a href="#content">service</a>
            </li><!-- /"sp-nav__item -->
            <li class="sp-nav__item">
              <a href="#works">works</a>
            </li><!-- /"sp-nav__item -->
            <li class="sp-nav__item">
              <a href="#overview">news</a>
            </li><!-- /"sp-nav__item -->
            <li class="sp-nav__item">
              <a href="blog.html">contact</a>
            </li><!-- /"sp-nav__item -->
            <li class="sp-nav__item">
              <a href="#contact">プライバシーポリシー</a>
            </li><!-- /"sp-nav__item -->
          </ul><!-- /.sp-nav__items -->
        </nav><!-- /.header__sp-nav -->
      </div><!-- /.header__inner -->
    </header><!-- /.header -->







      
