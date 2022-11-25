<?php get_header(); ?>

<?php
$home = esc_url( home_url('/'));
$about = esc_url( home_url('about'));
$service = esc_url( home_url('service'));
$works = esc_url( home_url('works'));
$news = esc_url( home_url('news'));
$contact = esc_url( home_url('contact'));
?>

<div class="fv-sub fv-sub--about">
    <div class="fv-sub__inner">
        <div class="fv-sub__head">  
            <h2 class="fv-sub__title" data-aos="fade-right">About</h2><!-- /.fv-sub__title -->
            <p class="fv-sub__subtitle" data-aos="fade-right">私たちについて</p><!-- /.fv-sub__subtitle -->
        </div><!-- /.fv-sub__head -->
        <div class="fv-sub__img" data-aos="fade-up" data-aos-delay="500">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/fv-about.jpg" alt="">
        </div><!-- /.fv-sub__img -->
    </div><!-- /.fv-sub__inner -->
</div><!-- /.fv-sub -->


<div class="breadcrumb breadcrumb--about">
    <div class="breadcrumb__inner">
        <?php if(function_exists('bcn_display'))
        {
        bcn_display();
        }?>
    </div><!-- /.breadcrumb__inner -->
</div>


<div class="section-main section-main--about" data-aos="fade-up">
    <div class="section-main__inner">
        <div class="section-main__head">
            <a href="#philosophy" class="section-main__link">経営理念</a><!-- /.section-main__link -->
            <a href="#access" class="section-main__link">アクセス</a><!-- /.section-main__link -->
            <a href="#company" class="section-main__link">会社概要</a><!-- /.section-main__link -->
        </div><!-- /.section-main__head -->
        <h3 class="section-main__title">国境を超え、メーカーを超え<br>「型にはまらない」あなただけの歓びを</h3><!-- /.section-main__title -->
        <p class="section-main__text">
            LUSSOは、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。<br>
            これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく、オーナー様となる方がクルマから直接感じるリアルな感性を第一にした、最良の一台との出会いをコーディネートいたします。
        </p><!-- /.section-main__text -->
    </div><!-- /.section-main__inner -->
</div><!-- /.section-main -->



<div id="philosophy" class="about-philosophy" data-aos="fade-up" data-aos-delay="200">
    <div class="about-philosophy__inner">
        <div class="about-philosophy__body">
            <div class="about-philosophy__head about-section">
                <p class="about-section__subtitle">経営理念</p><!-- /.about-section__subtitle -->
                <h3 class="about-section__title">Philosophy</h3><!-- /.about-section__title -->
            </div><!-- /.about-section -->
            <p class="about-philosophy__text">
                「お客様とは一生涯のお付き合い」をモットーとし、同時に社員一人一人が責任と誇り、使命感を持ち日々の仕事にやりがいと喜びを感じることができる会社を目指します。<br>
                そういう「社員満足」があってこそ、本当の「お客様に満足」が可能になり、そしてお客様のご満足がさらに社員の満足を高めてくれるからです。<br>
                心の豊かさは楽とかゆとりとかいうより仕事の充実感に求めねばなりません。<br>
                我々は現状に満足することなく挑戦し続けます。
            </p><!-- /.about-philosophy -->
            <p class="about-philosophy__name">代表取締役<span>田中太郎</span></p><!-- /.about-philosophy__name -->
        </div><!-- /.about-philosophy__body -->
    <div class="about-philosophy__img">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/philosophy.jpg" alt="">
    </div><!-- /.about-philosophy__img -->
    </div><!-- /.about-philosophy__inner -->
</div><!-- /.about-philosophy -->


<div id="access" class="about-access" data-aos="fade-up" data-aos-delay="200">
    <div class="about-access__inner">
        <div class="about-access__body">
            <div class="about-access__head about-section">
                <p class="about-section__subtitle">アクセス</p><!-- /.about-section__subtitle -->
                <h3 class="about-section__title about-section__title">Access</h3><!-- /.about-section__title -->
            </div><!-- /.about-section -->
            <p class="about-access__address">〒000-0000<span>〇〇県△△市□□区▲▲町0-0-0</span></p><!-- /.about-access__address -->
        </div><!-- /.about-access__body -->
        <div class="about-access__map">
            <div class="map__iframe">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12531.268619851091!2d140.8643571245558!3d38.26054652318441!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f8a283cf3d01199%3A0xe85370e5d54ac63e!2z44CSOTgwLTA4MTEg5a6u5Z-O55yM5LuZ5Y-w5biC6Z2S6JGJ5Yy65LiA55Wq55S6!5e0!3m2!1sja!2sjp!4v1666878920728!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div><!-- /.map__iframe -->
        </div><!-- /.about-access__map -->
    </div><!-- /.about-access__inner -->
</div><!-- /.about-access -->




<div id="company" class="about-company" data-aos="fade-up" data-aos-delay="200">
    <div class="about-company__inner">
            <div class="about-company__head about-section">
                <p class="about-section__subtitle">会社概要</p><!-- /.about-section__subtitle -->
                <h3 class="about-section__title about-section__title">Company Profile</h3><!-- /.about-section__title -->
            </div><!-- /.about-section -->
            <div class="about-company__body">
                <dl>
                    <div class="about-company__list profile">
                        <dt class="profile__title">会社名</dt>
                        <dd class="profile__text"><?php the_field('company'); ?></dd>
                    </div><!-- /.about-company__list -->
                    <div class="about-company__list profile">
                        <dt class="profile__title">所在地</dt>
                        <dd class="profile__text"><?php the_field('address'); ?></dd>
                    </div><!-- /.about-company__list -->
                    <div class="about-company__list profile">
                        <dt class="profile__title">設立</dt>
                        <dd class="profile__text"><?php the_field('stand'); ?></dd>
                    </div><!-- /.about-company__list -->
                    <div class="about-company__list profile">
                        <dt class="profile__title">代表取締役</dt>
                        <dd class="profile__text"><?php the_field('top'); ?></dd>
                    </div><!-- /.about-company__list -->
                    <div class="about-company__list profile">
                        <dt class="profile__title">事業内容</dt>
                        <dd class="profile__text">
                            <?php the_field('about'); ?>
                        </dd>
                    </div><!-- /.about-company__list -->
                </dl>
            </div><!-- /.about-company__body -->
    </div><!-- /.about-company__inner -->



    <div class="about-company__slider swiper">
  <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/company-slider01.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/company-slider02.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/company-slider03.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/company-slider04.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/company-slider05.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/company-slider06.jpg" alt="">
            </div>
        </div>
    </div><!-- /.about-company__slider -->
</div><!-- /.about-company -->


<section class="contact aboutpage-contact">
    <div class="contact__inner">
        <div class="contact__textbox">
            <h2 class="contact__title">輸入車の購入や修理のご相談など<br>お気軽にお問い合わせください。</h2><!-- /.contact__title -->
            <div class="contact__button--01">
                <a href="<?php echo $contact?>" class="contact__button-text contact__button-text--01 bgleft"><span><i class="fa-regular fa-envelope"></i>お問い合わせ</span></a><!-- /.button -->
            </div><!-- /.contact__button -->
            <div class="contact__button--02">
                <a href="<?php echo $contact?>" class="contact__button-text contact__button-text--02 bgleft"><span><i class="fa-regular fa-phone"></i>0000-000-000</span></a><!-- /.button -->
            </div><!-- /.contact__button -->
            <p class="contact__text">受付時間 : 火曜日を除く 10：00〜18：00</p><!-- /.contact__text -->
        </div><!-- /.contact__textbox -->
        <div class="contact__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/contact.jpg" alt="">
        </div><!-- /.contact__img -->
    </div><!-- /.contact__inner -->
</section><!-- /.contact -->

<?php get_footer(); ?>