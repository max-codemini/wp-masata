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
            <h2 class="fv-sub__title">Contact</h2><!-- /.fv-sub__title -->
            <p class="fv-sub__subtitle">お問い合わせ</p><!-- /.fv-sub__subtitle -->
        </div><!-- /.fv-sub__head -->
        <div class="fv-sub__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/fv-contact.jpg" alt="">
        </div><!-- /.fv-sub__img -->
    </div><!-- /.fv-sub__inner -->
</div><!-- /.fv-sub -->


<div class="breadcrumb breadcrumb--contact">
    <div class="breadcrumb__inner">
        <?php if(function_exists('bcn_display'))
        {
        bcn_display();
        }?>
    </div><!-- /.breadcrumb__inner -->
</div>

<div class="contact-sub">
    <div class="contact-sub__inner">
        <p class="contact-sub__text">
            弊社へのお問い合わせは<br>
            下記フォームより受け付けております。<br>
            担当者が確認後、折り返しご連絡させていただきます。
        </p>
        <div class="contact-sub__form form">
            <?php echo do_shortcode('[mwform_formkey key="485"]'); ?>
        </div>
    </div><!-- /.contact-sub__inner -->
</div><!-- /.contact-sub -->






<?php get_footer(); ?>




