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

<div class="completion">
    <div class="completion__inner">
        <h2 class="completion__title">THANK YOU FOR CONTACTING US.</h2>
        <p class="completion__subtitle">お問い合わせありがとうございます。</p><!-- /.completion__subtitle -->
        <p class="completion__text">
            近日中に折り返しご連絡いたします。<br>
            今しばらくお待ちくださいますよう、よろしくお願い申し上げます。<br>
            万が一、ご回答メールが届かない場合は、送信トラブル等の可能性もありますので、大変お手数ではございますが、もう一度フォームよりお問い合わせいただくか、お電話にてお問い合わせをお願いいたします。<br>
            今後ともご愛顧賜りますようよろしくお願い申し上げます。
        </p><!-- /.completion__text -->
        <div class="completion__button-block">
            <a href="<?php echo $home ?>" class="completion__button previous-button previous-button--completion"><span>TOPへ戻る</span></a><!-- /.completion__button -->
        </div><!-- /.completion__button -->
    </div><!-- /.completion__inner -->
</div><!-- /.completion -->





<?php get_footer(); ?>