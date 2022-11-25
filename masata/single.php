<?php get_header(); ?>

<?php
$home = esc_url( home_url('/'));
$about = esc_url( home_url('about'));
$service = esc_url( home_url('service'));
$works = esc_url( home_url('works'));
$news = esc_url( home_url('news'));
$contact = esc_url( home_url('contact'));
?>

<div class="breadcrumb breadcrumb--single-news">
    <div class="breadcrumb__inner">
        <?php if(function_exists('bcn_display'))
        {
        bcn_display();
        }?>
    </div><!-- /.breadcrumb__inner -->
</div>




<div class="single">
    <div class="single__inner">
        <div class="single__wrapper">

            <?php if ( have_posts() ): while ( have_posts() ): the_post() ?> 
            <div class="single-card single__item">
                <div class="single-card__category">
                    <?php
                        $cats =  get_the_category();
                        foreach($cats as $cat) {
                            echo '<span>' . $cat->name . '</span>';
                        }  
                    ?>
                </div><!-- /.warks-card__category -->    
                <div class="single-card__wrapper u-desktop">
                    <h2 class="single-card__title single-card__title--news">
                    <?php
                        if(mb_strlen($post->post_title, 'UTF-8')>46){
                        $title= mb_substr($post->post_title, 0, 46, 'UTF-8');
                        echo $title.'...';
                        }else{
                        echo $post->post_title;
                        }
                    ?>
                    </h2><!-- /.single-card__title -->
                </div><!-- /.single-card__wrapper -->
                <div class="single-card__wrapper u-mobile">
                    <h2  class="single-card__title ">
                        <?php
                        if(mb_strlen($post->post_title, 'UTF-8')>40){
                        $title= mb_substr($post->post_title, 0, 40, 'UTF-8');
                        echo $title.'...';
                        }else{
                        echo $post->post_title;
                        }
                        ?>
                    </h2><!-- /.single-card__title -->
                </div><!-- /.single-card__wrapper -->
                <p class="single-card__date"><?php the_time('Y.m.d') ?></p><!-- /.single-card__date -->
                <div class="single-card__img">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                </div><!-- /.single-card__img -->
            </div><!-- /.single-card -->
            <?php endwhile; endif ?> 

            <h2 class="single__subtitle01">ここに見出し2が入ります</h2><!-- /.single__subtitle -->
            <p class="single__text">
                本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。
            </p><!-- /.single__text -->
            <p class="single__text">
                本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。
            </p>
            
            <h3 class="single__subtitle02">ここに見出し2が入ります</h3><!-- /.single__subtitle -->
            <p class="single__text">
                本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。
            </p><!-- /.single__text -->
            <p class="single__text">
                本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。本文がここに入ります。
            </p>
            
            <ul class="single__list">
                <li>リスト</li>
                <li>リストリスト</li>
                <li>リストリストリスト</li>
            </ul><!-- /.single__list -->

            <?php // 現在の投稿に隣接している前後の投稿を取得する
            $prev_post = get_previous_post(); // 前の投稿を取得
            $next_post = get_next_post(); // 次の投稿を取得
            if( $prev_post || $next_post ): // どちらか一方があれば表示
            ?>
            <nav class="single__nav">

                
                    <div class="single__button">
                        <a href="<?php echo get_permalink( $prev_post->ID ); ?>" class="previous-button">
                            <span class="button-text">前の記事へ</span>
                        </a><!-- /.c-button -->
                    </div>
               
                
                
                    <div class="single__button">
                        <a href="<?php echo get_permalink( $next_post->ID ); ?>" class="next-button">
                            <span class="button-text">次の記事へ</span>
                        </a>
                    </div>
                

            </nav>

            <?php endif; ?>

        </div><!-- /.single__wrapper -->
        <div class="single__side">
            <div class="single__recommend recommend recommend--new">
                <h3 class="recommend__title">最新記事</h3><!-- /.recommend__title -->
                <ul class="recommend__list">

                    <?php
                    $args = array(
                    'posts_per_page' => 3 // 表示件数の指定
                    );
                    $posts = get_posts( $args );
                    foreach ( $posts as $post ): // ループの開始
                    setup_postdata( $post ); // 記事データの取得
                    ?>

                    <a href="<?php the_permalink();?>" class="recommend__item archive-card">
                    <div class="archive-card__inner">
                        <div class="archive-card__img">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                        </div><!-- /.archive-card__img -->
                        <div class="archive-card__textbox">
                            <div class="archive-card__wrapper u-desktop">
                                <h2 class="archive-card__title archive-card__title--news">

                                    <?php
                                        if(mb_strlen($post->post_title, 'UTF-8')>46){
                                        $title= mb_substr($post->post_title, 0, 46, 'UTF-8');
                                        echo $title.'...';
                                        }else{
                                        echo $post->post_title;
                                        }
                                    ?>

                                </h2><!-- /.archive-card__title -->
                            </div><!-- /.archive-card__wrapper -->
                            <div class="archive-card__wrapper u-mobile">
                                <h2  class="archive-card__title ">

                                    <?php
                                    if(mb_strlen($post->post_title, 'UTF-8')>35){
                                    $title= mb_substr($post->post_title, 0, 35, 'UTF-8');
                                    echo $title.'...';
                                    }else{
                                    echo $post->post_title;
                                    }
                                    ?>

                                </h2><!-- /.archive-card__title -->
                            </div><!-- /.archive-card__wrapper -->
                            <p class="archive-card__date"><?php the_time('Y.m.d') ?></p><!-- /.archive-card__date -->
                        </div><!-- /.archive__textbox -->
                    </div><!-- /.archive-card__inner -->      
                    <?php
                    endforeach; // ループの終了
                    wp_reset_postdata(); // 直前のクエリを復元する
                    ?>
                </ul><!-- /.recommend__lists -->
            </div><!-- /.recommend -->



        
        
    





    <div class="single__recommend recommend recommend--archive">
        <h3 class="recommend__title">アーカイブ</h3><!-- /.recommend__title -->
        


    <?php
    $year_month = Null;
    $year = Null;
    $month = Null;
    $args = array(
    'post_type' => 'post', //投稿タイプを指定
    'orderby' => 'date', // 日付順で表示
    'order' => 'DESC',
    'posts_per_page' => -1 // すべての投稿を表示
    );
    $the_query = new WP_Query($args);
    ?>
    <ul class="recommend__lists">
    <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <?php if ($year_month != get_the_date('Y.m')) : // 同じ年月でなければ表示 
            $year_month = get_the_date('Y.m');
            $year = get_the_date('Y'); // 年の取得
            $month = get_the_date('m'); // 月の取得
        ?>
            <!-- 月別アーカイブリスト -->
            <li class="recommend__list"><?php echo $year; ?>年<?php echo $month; ?>月</li>
        <?php endif; ?>
        <?php endwhile; ?>
    <?php else : ?>
    <?php endif; ?>
    <?php wp_reset_query(); ?>
    </ul>


    </div><!-- /.recommend -->




<div class="single__recommend recommend recommend--archive">
    <h3 class="recommend__title">カテゴリー</h3><!-- /.recommend__title -->
    <ul class="recommend__lists">
        
        <?php 
  $cats = get_categories();
  foreach($cats as $cat) {
    echo '<li class="recommend__list">' . $cat->name. '</li>';
  }
  ?>
    </ul><!-- /.recommend__list -->
</div><!-- /.recommend -->
</div><!-- /.single__side -->
</div><!-- /.single__inner -->
</div><!-- /.single -->



<section class="contact single-contact">
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