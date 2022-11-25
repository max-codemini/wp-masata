<?php get_header(); ?>

<?php
$home = esc_url( home_url('/'));
$about = esc_url( home_url('about'));
$service = esc_url( home_url('service'));
$works = esc_url( home_url('works'));
$news = esc_url( home_url('news'));
$contact = esc_url( home_url('contact'));
?>



<div class="breadcrumb breadcrumb--single-works">
    <div class="breadcrumb__inner">
        <?php if(function_exists('bcn_display'))
        {
        bcn_display();
        }?>
    </div><!-- /.breadcrumb__inner -->
</div>








<section class="single-works">
    <div class="single-works__inner">
        <?php while ( have_posts() ) : the_post(); ?>
            <?php $terms = get_the_terms($post->ID, 'works'); ?>
                
                <?php
$terms = get_terms('works-category');
foreach( $terms as $term ) {
echo '<p class="single-works__category">'.$term->name.'</p>';
}
?>
                
                <div class="single-works__wrapper u-desktop">
                    <a href="<?php the_permalink(); ?>" class="single-works__title single-works__title--archive-works">
                        <?php
                        if(mb_strlen($post->post_title, 'UTF-8')>46){
                            $title= mb_substr($post->post_title, 0, 46, 'UTF-8');
                            echo $title.'...';
                        }else{
                            echo $post->post_title;
                        }
                        ?>
                    </a><!-- /.single-works__title -->
                </div><!-- /.single-works__wrapper -->

                <div class="single-works__wrapper u-mobile">
                    <a href="<?php the_permalink(); ?>" class="single-works__title">
                        <?php
                        if(mb_strlen($post->post_title, 'UTF-8')>24){
                            $title= mb_substr($post->post_title, 0, 24, 'UTF-8');
                            echo $title.'...';
                        }else{
                            echo $post->post_title;
                        }
                        ?>
                    </a><!-- /.single-works__title -->
                </div><!-- /.single-works__wrapper -->
                <p class="single-works__date"><?php the_time('Y.m.d') ?></p><!-- /.topics__date -->

                <div class="single-works__img">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                </div><!-- /.single-works__img -->

        <?php endwhile; ?>
        <p class="single-works__text">本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。

本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。</p><!-- /.single-works__text -->



                <div class="single-works__button-block">
                    <a href="<?php echo $works ?>" class="single-works__button previous-button">
                        <span>実績一覧へ戻る</span>
                    </a><!-- /.c-button -->
                </div>
    </div><!-- /.single-works__inner -->
</section><!-- /.single-works -->








<section class="contact sub-contact">
    <div class="contact__inner">
        <div class="contact__textbox">
            <h2 class="contact__title">輸入車の購入や修理のご相談など<br>お気軽にお問い合わせください。</h2><!-- /.contact__title -->
            <div class="contact__button--01">
                <a href="" class="contact__button-text contact__button-text--01 bgleft"><span><i class="fa-regular fa-envelope"></i>お問い合わせ</span></a><!-- /.button -->
            </div><!-- /.contact__button -->
            <div class="contact__button--02">
                <a href="" class="contact__button-text contact__button-text--02 bgleft"><span><i class="fa-regular fa-phone"></i>0000-000-000</span></a><!-- /.button -->
            </div><!-- /.contact__button -->
            <p class="contact__text">受付時間 : 火曜日を除く 10：00〜18：00</p><!-- /.contact__text -->
        </div><!-- /.contact__textbox -->
        <div class="contact__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/contact.jpg" alt="">
        </div><!-- /.contact__img -->
    </div><!-- /.contact__inner -->
</section><!-- /.contact -->

<?php get_footer(); ?>