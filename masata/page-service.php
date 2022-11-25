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
            <h2 class="fv-sub__title"  data-aos="fade-right" >Service</h2><!-- /.fv-sub__title -->
            <p class="fv-sub__subtitle"  data-aos="fade-right" >サービス紹介</p><!-- /.fv-sub__subtitle -->
        </div><!-- /.fv-sub__head -->
        <div class="fv-sub__img" data-aos="fade-up" data-aos-delay="500">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/fv-service.jpg" alt="">
        </div><!-- /.fv-sub__img -->
    </div><!-- /.fv-sub__inner -->
</div><!-- /.fv-sub -->


<div class="breadcrumb breadcrumb--service">
    <div class="breadcrumb__inner">
        <?php if(function_exists('bcn_display'))
        {
        bcn_display();
        }?>
    </div><!-- /.breadcrumb__inner -->
</div>


<div class="section-main section-main--about"  data-aos="fade-up">
    <div class="section-main__inner">
        <div class="section-main__head">
            <a href="#support" class="section-main__link">購入サポート</a><!-- /.section-main__link -->
            <a href="#remake" class="section-main__link">修理・整備</a><!-- /.section-main__link -->
            <a href="#car-check" class="section-main__link">車検・点検</a><!-- /.section-main__link -->
        </div><!-- /.section-main__head -->
        <h3 class="section-main__title">お客様一人一人が求める<br>理想のカー ライフに寄り添います</h3><!-- /.section-main__title -->
        <p class="section-main__text">
            様々な輸入車・国産車のメンテナンスのご 相談から点検・整備まで、親切かつスピーディな対応を心がけ、あらゆる疑問や不安にお 答えします。最新鋭の自社集中工場には、四輪アライメントをはじめ最新コンピューターと各ブランドに精通した熟練のサービススタッフを配置、フロ ントでは車種ブランド別の専用電話回線をご用意しております。
        </p><!-- /.section-main__text -->
    </div><!-- /.section-main__inner -->
</div><!-- /.section-main -->




<div id="support" class="service-section service-section--01">
    <div class="service-section__inner">
        <div class="service-section__head" data-aos="fade-right">
            <p class="service-section__number">01</p><!-- /.service-section__number -->
            <h3 class="service-section__title">購入サポート</h3><!-- /.service-section__title -->
            <p class="service-section__text">国を超え、メーカーを超え、高級の本質をお届けする特別な一台との出会いをサポートします。</p><!-- /.service-section__text -->
        </div><!-- /.service-section__head -->
        <div class="service-section__img"  data-aos="fade-up" data-aos-delay="250">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/nav-service01.jpg" alt="">
        </div><!-- /.service-section__img -->
    </div><!-- /.service-section__inner -->
    <div class="service-section__body">
    <div class="service-section__feature feature" data-aos="fade-right" data-aos-delay="500">
    <h3 class="feature__title">feature</h3><!-- /.feature__title -->
    <p class="feature__text">
        LUSSOは、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。<br>
        これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく、オーナー様となる方がクルマから直接感じるリアルな感性を第一にした、最良の一台との出会いをコーディネートいたします。
    </p><!-- /.feature__text -->
    </div><!-- /.feature -->
    </div><!-- /.service-section__body -->
</div><!-- /.service-section -->

<div id="remake" class="service-section service-section--02">
    <div class="service-section__inner">
        <div class="service-section__head" data-aos="fade-right">
            <p class="service-section__number">02</p><!-- /.service-section__number -->
            <h3 class="service-section__title">修理・整備</h3><!-- /.service-section__title -->
            <p class="service-section__text">高度な輸入車修理技術と数多くの修理実績、熟練の技術・設備であなたの愛車を完全に直します。</p><!-- /.service-section__text -->
        </div><!-- /.service-section__head -->
        <div class="service-section__img" data-aos="fade-up" data-aos-delay="250">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/nav-service02.jpg" alt="">
        </div><!-- /.service-section__img -->
    </div><!-- /.service-section__inner -->
    <div class="service-section__body">
    <div class="service-section__feature feature" data-aos="fade-right" data-aos-delay="500">
    <h3 class="feature__title">feature</h3><!-- /.feature__title -->
    <p class="feature__text">
        LUSSOは、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。<br>
        これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく、オーナー様となる方がクルマから直接感じるリアルな感性を第一にした、最良の一台との出会いをコーディネートいたします。
    </p><!-- /.feature__text -->
    </div><!-- /.feature -->
    </div><!-- /.service-section__body -->
</div><!-- /.service-section -->

<div  id="car-check" class="service-section service-section--03">
    <div class="service-section__inner">
        <div class="service-section__head" data-aos="fade-right">
            <p class="service-section__number">03</p><!-- /.service-section__number -->
            <h3 class="service-section__title">車検・点検</h3><!-- /.service-section__title -->
            <p class="service-section__text">輸入車の取り扱いが県内トップクラス。専門の整備工場へ任せたいならLUSSOへご相談ください。</p><!-- /.service-section__text -->
        </div><!-- /.service-section__head -->
        <div class="service-section__img" data-aos="fade-up" data-aos-delay="250">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/nav-service03.jpg" alt="">
        </div><!-- /.service-section__img -->
    </div><!-- /.service-section__inner -->
    <div class="service-section__body">
    <div class="service-section__feature feature" data-aos="fade-right" data-aos-delay="500">
    <h3 class="feature__title">feature</h3><!-- /.feature__title -->
    <p class="feature__text">
        LUSSOは、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。<br>
        これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく、オーナー様となる方がクルマから直接感じるリアルな感性を第一にした、最良の一台との出会いをコーディネートいたします。
    </p><!-- /.feature__text -->
    </div><!-- /.feature -->
    </div><!-- /.service-section__body -->
</div><!-- /.service-section -->



<section class="contact servicepage-contact">
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