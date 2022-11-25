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
    <link rel="icon" href="<?php echo get_template_directory_uri() ?>/assets/images/common/favicon.jpg"/>
    <!-- fontAwesome -->
    <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <!-- font family -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Noto+Sans+JP:wght@300;400;500;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Noto+Sans+JP:wght@300;400;500;700&family=Noto+Serif+JP:wght@300;400;500;700&display=swap" rel="stylesheet"/>
    <!-- css -->
    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/> -->
    <link rel="stylesheet" href="//unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- JavaScript -->
    <!-- <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script> -->
    <script src="//unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>



<?php
$home = esc_url( home_url('/'));
$about = esc_url( home_url('about'));
$service = esc_url( home_url('service'));
$works = esc_url( home_url('works'));
$news = esc_url( home_url('news'));
$contact = esc_url( home_url('contact'));
?>


  <?php wp_body_open(); ?>
  <header class="header">
      <div class="header__inner js-header">
        <h1 class="header__title">
          <a href="#" class="header__logo">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/sp-logo.svg" alt="LUSSO">
          </a><!-- /.header__logo -->
        </h1><!-- /.header__title -->
        <div class="header__drawer hamburger js-hamburger openbtn1">
          <span></span>
          <span></span>
          <span></span>
        </div><!-- /.header__drawer -->
        <nav class="header__pc-nav pc-nav">
            <ul class="pc-nav__items">
            <li class="pc-nav__item">
              <a class="pc-nav__link" href="<?php echo $home ?>">TOP</a>
            </li>
            <li class="pc-nav__item">
              <a class="pc-nav__link" href="<?php echo $about ?>">ABOUT</a>
            </li>
            <li class="pc-nav__item js-service">
              <a class="pc-nav__link" href="<?php echo $service ?>">SERVICE</a>
              <div class="tab-service">
                        <div class="tab-service__items">
                        <h3 class="tab-service__title">Service</h3><!-- /.tab-service__title -->
                          <a class="tab-service__item" href="<?php echo $service ?>">
                              <div class="tab-service__img">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/nav-service01.jpg" alt="">
                              </div><!-- /.tab-service__img -->
                              <div class="tab-service__text">購入サポート</div><!-- /.tab-service__text -->
                          </a>
                          <a class="tab-service__item" href="<?php echo $service ?>">
                              <div class="tab-service__img">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/nav-service02.jpg" alt="">
                              </div><!-- /.tab-service__img -->
                              <div class="tab-service__text">修理・整備</div><!-- /.tab-service__text -->
                          </a>
                        <a class="tab-service__item" href="<?php echo $service ?>">
                              <div class="tab-service__img">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/nav-service03.jpg" alt="">
                              </div><!-- /.tab-service__img -->
                              <div class="tab-service__text">車検・点検</div><!-- /.tab-service__text -->
                          </a>
                          </div><!-- /.tab-service__items -->
                      </div>
            </li>
            
            <li class="pc-nav__item">
              <a class="pc-nav__link" href="<?php echo $works ?>">WORKS</a>
            </li>
            <li class="pc-nav__item">
              <a class="pc-nav__link" href="<?php echo $news ?>">NEWS</a>
            </li>
            <li class="pc-nav__item">
              <a class="pc-nav__link" href="<?php echo $contact ?>"><i class="fa-regular fa-envelope"></i>CONTACT</a>
            </li>
          </ul>
        </nav><!-- /.p-header__pc-nav -->



        




        <div class="circle-bg"></div>











        <nav class="header__sp-nav sp-nav js-sp-nav">
        <h1 class="sp-nav__title">
          <a href="#" class="sp-nav__logo">
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/drawer-logo.svg" alt="LUSSO">
          </a><!-- /.header__logo -->
        </h1>
        <div class="sp-nav__body">
        <?php
$defaults = array(
  'theme_location'  => 'sp-nav',//メニュー位置の識別子
	'menu'            => '',
	'menu_class'      => 'sp-nav__items',//ulタグ クラス名
  'depth'           => 0,
	// 'menu_id'         => '{メニューのスラッグ}-{連番}',
	// 'container'       => 'div',
	// 'container_class' => 'menu-{メニューのスラッグ}-container',
	// 'container_id'    => '',
	// 'fallback_cb'     => 'wp_page_menu',
	// 'before'          => '',
	// 'after'           => '',
	// 'link_before'     => '',
	// 'link_after'      => '',
	// 'echo'            => true,
	// 'walker'          => '',
	// 'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
  
);
wp_nav_menu( $defaults );
?>
<div class="sp-nav__icon">
                          <div class="icon__items">
                            <a class="icon__item">
                                <i class="fa-brands fa-facebook"></i>
                            </a><!-- /.icon__item -->
                            <a class="icon__item">
                                <i class="fa-brands fa-twitter"></i>
                            </a><!-- /.icon__item -->
                            <a class="icon__item">
                                <i class="fa-brands fa-instagram"></i>
                            </a><!-- /.icon__item -->
                          </div><!-- /.icon__items -->
                        </div><!-- /.sp-nav__icon -->
        </div><!-- /.sp-nav__body -->
        
        </nav><!-- /.header__sp-nav -->
      </div><!-- /.header__inner -->
    </header><!-- /.header -->









      
