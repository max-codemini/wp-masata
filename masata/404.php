<?php get_header(); ?>


<?php
$home = esc_url( home_url('/'));
$about = esc_url( home_url('about'));
$service = esc_url( home_url('service'));
$works = esc_url( home_url('works'));
$news = esc_url( home_url('news'));
$contact = esc_url( home_url('contact'));
?>



<div class="not-found">
    <div class="not-found__inner">
        <div class="not-found__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/fv-404.jpg" alt="">
            <h2 class="not-found__title u-mobile">404 Not Found</h2><!-- /.not-found__title -->
            <div class="not-found__wrapper u-desktop">
                <h2 class="not-found__title">404 Not Found</h2><!-- /.not-found__title -->
                <p class="not-found__text">お探しのページはURLが誤っているか、削除された可能性があります。<br>3秒後にTOPページに遷移します</p><!-- /.not-found__text -->
                <div class="not-found__button-block">
                    <a href="<?php echo $home ?>" class="not-found__button--pc previous-button">
                        <span class="previous-button__text">TOPへ戻る</span>
                    </a><!-- /.c-button -->
                </div>
            </div>
                <h2 class="not-found__title u-mobile">404 Not Found</h2><!-- /.not-found__title -->
        </div>
    </div><!-- /.not-found__inner -->
    <div class="not-found__wrapper u-mobile">
        <p class="not-found__text">お探しのページはURLが誤っているか、削除された可能性があります。<br>3秒後にTOPページに遷移します</p><!-- /.not-found__text -->
        <div class="not-found__button-block">
            <a href="<?php echo $home ?>" class="not-found__button--sp previous-button">
                <span class="previous-button__text">TOPへ戻る</span>
            </a><!-- /.c-button -->
        </div>
    </div><!-- /.not-found__wrapper -->
</div><!-- /.not-found -->
<div class="sub-footer">
<?php get_footer(); ?>
</div>