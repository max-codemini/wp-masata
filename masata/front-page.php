<?php get_header(); ?>


<?php
$home = esc_url( home_url('/'));
$about = esc_url( home_url('about'));
$service = esc_url( home_url('service'));
$works = esc_url( home_url('works'));
$news = esc_url( home_url('news'));
$contact = esc_url( home_url('contact'));
?>

<section class="fv">
    <div class="fv__inner">
        <div class="fv__swiper swiper-container" data-aos="fade-up" >
            <div class="swiper-wrapper">
                    <!-- 背景画像１ -->
                    <div class="swiper-slide">
                        <img class="swiper-img" src="<?php echo get_template_directory_uri() ?>/assets/images/common/fv-01.jpg" alt="">
                    </div>
                    <!-- 背景画像２ -->
                    <div class="swiper-slide">
                        <img class="swiper-img" src="<?php echo get_template_directory_uri() ?>/assets/images/common/fv-02.jpg" alt="">
                    </div>
                    <!-- 背景画像３ -->
                    <div class="swiper-slide">
                        <img class="swiper-img" src="<?php echo get_template_directory_uri() ?>/assets/images/common/fv-03.jpg" alt="">
                    </div>
                    <!-- 背景画像4 -->
                    <div class="swiper-slide">
                        <img class="swiper-img" src="<?php echo get_template_directory_uri() ?>/assets/images/common/fv-04.jpg" alt="">
                    </div>
            </div>
        </div>
        <div class="fv__body">
            <h2 class="fv__title" data-aos="fade-up" data-aos-delay="500">あなたの<br>日常が目覚める</h2><!-- /.fv__title -->
            <h3 class="fv__subtitle" data-aos="fade-up" data-aos-delay="1000">Change your life</h3><!-- /.fv__subtitle -->
        </div><!-- /.fv__ -->
    </div><!-- /.fv__inner -->
</section><!-- /.fv -->


<div class="message top-message">
    <div class="message__title">
        <h2 >Good life for Good Car</h2><!-- /.message -->
    </div><!-- /.message__title -->
</div><!-- /.message -->





<section class="about top-about" data-aos="fade-up">
    <div class="about__inner inner">
        <div class="about__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/about.jpg" alt="">
        </div><!-- /.about__img -->
        <div class="about__body">
            <h2 class="about__title section-title section-title--small">About us</h2><!-- /.section__title -->
            <p class="about__text">
                LUSSOは、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。<br>
                これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく、オーナー様となる方がクルマから直接感じるリアルな感性を第一にした、最良の一台との出会いをコーディネートいたします。
            </p><!-- /.about__text -->
            <div class="about__button">
                <a href="<?php echo $about?>" class="button button--noline">
                    <span>read more</span>
                </a>
            </div><!-- /.about__button -->
        </div><!-- /.about__body -->
    </div><!-- /.about__inner -->
</section><!-- /.about -->






<section class="service top-service">
    <div class="service__head">
        <h2 class="section-title section-title--service" data-aos="fade-left">Service</h2><!-- /.section-title -->
    </div><!-- /.service__head -->
    <div class="service__items service-cards">
        <div class="service__item  service__item--01 service-card" data-target="bg01">
            <div class="service-card__img u-mobile">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/service_01.jpg" alt="serviceの画像1">            </div><!-- /.service__img -->
            <div class="service-card__text-inner">
                <p class="service-card__subtitle">Service01</p><!-- /.service-card__subtitle -->
                <h3 class="service-card__title">購入サポート</h3><!-- /.service-card__title -->
                <p class="service-card__text u-mobile">国を超え、メーカーを超え、高級の本質をお届けする特別な一台との出会いをサポートします。</p><!-- /.service__text -->
                <div class="service-card__button">
                    <a href="<?php echo $service?>" class="button button--service">
                        <span>read more</span>
                    </a>
                </div>
            </div><!-- /.service-card__text-inner -->
        </div><!-- /.service__item -->

        <div class="service__item  service__item--02 service-card" data-target="bg02">
            <div class="service-card__img u-mobile">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/service_02.jpg" alt="serviceの画像1">
            </div><!-- /.service__img -->
            <div class="service-card__text-inner">
                <p class="service-card__subtitle">Service02</p><!-- /.service-card__subtitle -->
                <h3 class="service-card__title">修理・整備</h3><!-- /.service-card__title -->
                <p class="service-card__text u-mobile">高度な輸入車修理技術と数多くの修理実績、熟練の技術・設備であなたの愛車を完全に直します。</p><!-- /.service__text -->
                <div class="service-card__button">
                    <a href="<?php echo $service?>" class="button button--service">
                        <span>read more</span>
                    </a><!-- /.c-button -->
                </div>
            </div><!-- /.service-card__text-inner -->
        </div><!-- /.service__item -->

        <div class="service__item  service__item--03 service-card" data-target="bg03">
            <div class="service-card__img u-mobile">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/service_03.jpg" alt="serviceの画像1">
            </div><!-- /.service__img -->
            <div class="service-card__text-inner">
                <p class="service-card__subtitle">Service03</p><!-- /.service-card__subtitle -->
                <h3 class="service-card__title">車検・点検</h3><!-- /.service-card__title -->
                <p class="service-card__text service-card__text u-mobile">輸入車の取り扱いが県内トップクラス。専門の整備工場へ任せたいならLUSSOへご相談ください。</p><!-- /.service__text -->
                <div class="service-card__button">
                    <a href="<?php echo $service?>" class="button button--service">
                        <span>read more</span>
                    </a><!-- /.c-button -->
                </div>
            </div><!-- /.service-card__text-inner -->
        </div><!-- /.service__item -->
    </div><!-- /.service__items -->










    <!-- ボタン -->
    <div class="bg-change bg-change--01 js-btn--01 u-desktop">
        <p class="service-card__subtitle service-card__subtitle--01">Service01</p><!-- /.service-card__subtitle -->
        <h3 class="service-card__title service-card__title--01">購入サポート</h3><!-- /.service-card__title -->
        <p class="service-card__text service-card__text--pc">国を超え、メーカーを超え、高級<br>の本質をお届けする特別な一台と<br>の出会いをサポートします。</p><!-- /.service__text -->
        <div class="service-card__button-block service-card__button--01">
            <a href="<?php echo $service?>" class="service-card__button button--01">
                <span class="service-card__button-text service-card__button-text--01">read more</span>
            </a><!-- /.c-button -->
        </div>
    </div>

    <div class="bg-change bg-change--02 js-btn--02 u-desktop">
        <p class="service-card__subtitle service-card__subtitle--02">Service02</p><!-- /.service-card__subtitle -->
        <h3 class="service-card__title service-card__title--02">修理・整備</h3><!-- /.service-card__title -->
        <p class="service-card__text service-card__text--pc">高度な輸入車修理技術と数多くの<br>修理実績、熟練の技術・設備であ<br>なたの愛車を完全に直します。</p><!-- /.service__text -->
        <div class="service-card__button-block service-card__button--02">
            <a href="<?php echo $service?>" class="service-card__button button--02">
                <span class="service-card__button-text service-card__button-text--02">read more</span>
            </a><!-- /.c-button -->
        </div>
    </div>

    <div class="bg-change bg-change--03 js-btn--03 u-desktop">
        <p class="service-card__subtitle service-card__subtitle--03">Service03</p><!-- /.service-card__subtitle -->
        <h3 class="service-card__title service-card__title--03">車検・点検</h3><!-- /.service-card__title -->
        <p class="service-card__text service-card__text--pc">輸入車の取り扱いが県内トップク<br>ラス。専門の整備工場へ任せたい<br>ならLUSSOへご相談ください。</p><!-- /.service__text -->
        <div class="service-card__button-block service-card__button--03">
            <a href="<?php echo $service?>" class="service-card__button button--03">
                <span class="service-card__button-text service-card__button-text--03">read more</span>
            </a><!-- /.c-button -->
        </div>
    </div>
    <!-- コンテンツ -->
        <div class="contents u-desktop">
        </div>
</section><!-- /.service -->
























<section class="works">
    <div class="works__head" data-aos="fade-right"> 
        <h2 class="section-title">Works</h2><!-- /.section-title -->
    </div><!-- /.service__head -->
    <div class="works__inner">
        <div class="works__items works-cards">

            <?php
                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                $taxonomy_slug = 'works-category'; // カスタムタクソノミーのスラッグを指定
                $post_type_slug = 'works'; // 投稿タイプのスラッグを指定
                $terms = get_terms($taxonomy_slug); // タームを取得
            ?>

            <?php
                $terms = get_terms($taxonomy_slug); // タームを取得
                $term_slug = $value->slug;
                $args = array(
                'paged'=>$paged,//サブループなので設定
                'post_type' => $post_type_slug,
                $taxonomy_slug => $term_slug,
                'posts_per_page' => 3,  
                'order' => 'DESC',
                'orderby' => 'date',
                'post_status' => 'publish'
                );
                $myquery = new WP_Query( $args );
            ?>

            <?php if ( $myquery->have_posts()): ?>
                <?php while($myquery->have_posts()): $myquery->the_post(); ?>
                <!-- //繰返し処理 -->

                    <div href="" class="works__item works-card" data-aos="fade-down">
                        <div class="works-card__inner">
                            <div class="works-card__body">
                                <div class="works-card__img">
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                                </div><!-- /.works-card__img -->
                                <div class="works-card__textbox">
                                    <div class="works-card__category">
                                        <?php
                                            if ($terms = get_the_terms($post->ID, 'works_category')) {
                                                foreach ( $terms as $term ) {
                                                    echo ('<span>') ;
                                                    echo esc_html($term->name)  ;
                                                    echo ('</span>') ;
                                                }
                                            }
                                        ?>
                                    </div><!-- /.warks-card__category -->                            
                                    <div class="works-card__title">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php
                                                if(mb_strlen($post->post_title, 'UTF-8')>24){
                                                    $title= mb_substr($post->post_title, 0, 24, 'UTF-8');
                                                    echo $title.'...';
                                                }else{
                                                    echo $post->post_title;
                                                }
                                            ?>
                                        </a><!-- /.topics__title -->
                                    </div><!-- /.works-card__title -->
                                    <p class="works-card__text u-desktop">LUSSOは、輸入車選びのすべてを見つめ直し、新たなスタイルを提案するインポート・セレクト・ブランドです。これまでの憧れだけや批評家の意見といったイメージで選ぶのではなく…</p><!-- /.works-card__text -->
                                    <p class="works-card__date"><?php the_time('Y.m.d') ?></p><!-- /.works-card__date -->
                                </div><!-- /.works-card__textbox -->
                            </div><!-- /.works-card__body -->
                        </div><!-- /.works-card__inner -->      
                    </div><!-- /.works-card -->

                <!-- 繰返し終了 -->
                <?php endwhile; ?>
            <?php endif; ?>

        </div><!-- /.works__items -->
        <div class="works__button">
            <a href="<?php echo $works ?>" class="button button--noline">
                <span>read more</span>
            </a>
        </div><!-- /.about__button -->
    </div><!-- /.works__inner -->
</section><!-- /.works -->











<section class="news">
    <div class="news__inner">
        <div class="news__content">
        <div class="news__wrapper">
        <div class="news__head" data-aos="fade-right"> 
                <h2 class="section-title">News</h2><!-- /.section-title -->
            </div><!-- /.service__head -->
            <div class="news__category category">
                <!--タブ-->
                <ul class="tab-panel__tab-group category__list category__list--news">
                    <li class="js-tab tab-panel__tab tab-A is-active"><a>すべてのお知らせ</a></li>
                    <li class="js-tab tab-panel__tab tab-B"><a>トピックス</a></li>
                    <li class="js-tab tab-panel__tab tab-C"><a>イベント・キャンペーン</a></li>
                    <li class="js-tab tab-panel__tab tab-D"><a>入庫車情報</a></li>
                </ul>
            </div><!-- /.news__category-box -->
            <div class="news__archive-button u-desktop">
                <a href="<?php echo $news?>" class="button button--noline">
                    <span>お知らせ一覧</span>
                </a>
            </div><!-- /.about__button -->
        </div><!-- /.news__wrapper -->
        <div class="news__items">


<!--タブを切り替えて表示するコンテンツ-->
<div class="tab-panel__panel-group">

<!-- AAAAAAAA -->
<div class="js-panel tab-panel__panel tab-A is-show">

<?php
        $newslist = get_posts( array(
            'posts_per_page' => 6 //取得記事件数
        ));
            foreach( $newslist as $post ):
            setup_postdata( $post );
    ?>

        <!-- //繰返し処理 -->
        
        <div class="tab-panel__item topics" data-aos="fade-up">
            <div class="topics__inner">
                <div class="topics__body">
                    <div class="topics__meta">
                        <p class="topics__date"><?php the_time('Y.m.d') ?></p><!-- /.topics__date -->
                        <?php
                            $cats =  get_the_category();
                            foreach($cats as $cat) {
                                echo '<p class="topics__category topics__category--sub">' . $cat->name . '</p>';
                            }  
                        ?>
                    </div><!-- /.topics__meta -->

                    <div class="topics__wrapper u-desktop">
                        <a href="<?php the_permalink(); ?>" class="topics__title topics__title--news">
                            <?php
                            if(mb_strlen($post->post_title, 'UTF-8')>46){
                                $title= mb_substr($post->post_title, 0, 46, 'UTF-8');
                                echo $title.'...';
                            }else{
                                echo $post->post_title;
                            }
                            ?>
                        </a><!-- /.topics__title -->
                    </div><!-- /.topics__wrapper -->

                    <div class="topics__wrapper u-mobile">
                        <a href="<?php the_permalink(); ?>" class="topics__title topics__title--news">
                            <?php
                            if(mb_strlen($post->post_title, 'UTF-8')>40){
                                $title= mb_substr($post->post_title, 0, 40, 'UTF-8');
                                echo $title.'...';
                            }else{
                                echo $post->post_title;
                            }
                            ?>
                        </a><!-- /.topics__title -->
                    </div><!-- /.topics__wrapper -->
                </div><!-- /.topics__body -->
            </div><!-- /.topics__inner -->      
        </div><!-- /.topics -->
        <!-- 繰返し終了 -->
        <?php
        endforeach;
        wp_reset_postdata();
    ?>
<div class="pagenavi pagenavi--news">
    <?php wp_pagenavi();?>
</div><!-- /.pagenation -->
</div>




<!-- BBBBBBBB -->
<div class="js-panel tab-panel__panel tab-B">

    <?php
        $newslist = get_posts( array(
            'category_name' => 'topics', //特定のカテゴリースラッグを指定
            'posts_per_page' => 10 //取得記事件数
        ));
            foreach( $newslist as $post ):
            setup_postdata( $post );
    ?>

    <!-- //繰返し処理 -->
    <div class="tab-panel__item topics">
        <div class="topics__inner">
            <div class="topics__body">
                <div class="topics__meta">
                    <p class="topics__date"><?php the_time('Y.m.d') ?></p><!-- /.topics__date -->
                    <?php
                        $cats =  get_the_category();
                        foreach($cats as $cat) {
                            echo '<p class="topics__category topics__category--sub">' . $cat->name . '</p>';
                        }  
                    ?>
                                        
                </div><!-- /.topics__meta -->

                <div class="topics__wrapper u-desktop">
                    <a href="<?php the_permalink(); ?>" class="topics__title topics__title--news">
                        <?php
                        if(mb_strlen($post->post_title, 'UTF-8')>46){
                            $title= mb_substr($post->post_title, 0, 46, 'UTF-8');
                            echo $title.'...';
                        }else{
                            echo $post->post_title;
                        }
                        ?>
                    </a><!-- /.topics__title -->
                </div><!-- /.topics__wrapper -->

                <div class="topics__wrapper u-mobile">
                    <a href="<?php the_permalink(); ?>" class="topics__title topics__title--news">
                        <?php
                        if(mb_strlen($post->post_title, 'UTF-8')>40){
                            $title= mb_substr($post->post_title, 0, 40, 'UTF-8');
                            echo $title.'...';
                        }else{
                            echo $post->post_title;
                        }
                        ?>
                    </a><!-- /.topics__title -->
                </div><!-- /.topics__wrapper -->

            </div><!-- /.topics__body -->
        </div><!-- /.topics__inner -->      
    </div><!-- /.topics -->
    <!-- 繰返し終了 -->

    <?php
        endforeach;
        wp_reset_postdata();
    ?>
    <div class="pagenavi pagenavi--news">
        <?php wp_pagenavi();?>
    </div><!-- /.pagenation -->

</div>


<!-- CCCCCCCCC -->
<div class="js-panel tab-panel__panel tab-C">
<?php
        $newslist = get_posts( array(
            'category_name' => 'event', //特定のカテゴリースラッグを指定
            'posts_per_page' => 10 //取得記事件数
        ));
            foreach( $newslist as $post ):
            setup_postdata( $post );
    ?>

    <!-- //繰返し処理 -->
    <div class="tab-panel__item topics">
        <div class="topics__inner">
            <div class="topics__body">
                <div class="topics__meta">
                    <p class="topics__date"><?php the_time('Y.m.d') ?></p><!-- /.topics__date -->
                    <?php
                        $cats =  get_the_category();
                        foreach($cats as $cat) {
                            echo '<p class="topics__category topics__category--sub">' . $cat->name . '</p>';
                        }  
                    ?>
                                        
                </div><!-- /.topics__meta -->

                <div class="topics__wrapper u-desktop">
                    <a href="<?php the_permalink(); ?>" class="topics__title topics__title--news">
                        <?php
                        if(mb_strlen($post->post_title, 'UTF-8')>46){
                            $title= mb_substr($post->post_title, 0, 46, 'UTF-8');
                            echo $title.'...';
                        }else{
                            echo $post->post_title;
                        }
                        ?>
                    </a><!-- /.topics__title -->
                </div><!-- /.topics__wrapper -->

                <div class="topics__wrapper u-mobile">
                    <a href="<?php the_permalink(); ?>" class="topics__title topics__title--news">
                        <?php
                        if(mb_strlen($post->post_title, 'UTF-8')>40){
                            $title= mb_substr($post->post_title, 0, 40, 'UTF-8');
                            echo $title.'...';
                        }else{
                            echo $post->post_title;
                        }
                        ?>
                    </a><!-- /.topics__title -->
                </div><!-- /.topics__wrapper -->

            </div><!-- /.topics__body -->
        </div><!-- /.topics__inner -->      
    </div><!-- /.topics -->
    <!-- 繰返し終了 -->

    <?php
        endforeach;
        wp_reset_postdata();
    ?>
    <div class="pagenavi pagenavi--news">
        <?php wp_pagenavi();?>
    </div><!-- /.pagenation -->
</div>


<!-- DDDDDDDDDD -->
<div class="js-panel tab-panel__panel tab-D">
<?php
        $newslist = get_posts( array(
            'category_name' => 'infomation', //特定のカテゴリースラッグを指定
            'posts_per_page' => 10 //取得記事件数
        ));
            foreach( $newslist as $post ):
            setup_postdata( $post );
    ?>

    <!-- //繰返し処理 -->
    <div class="tab-panel__item topics">
        <div class="topics__inner">
            <div class="topics__body">
                <div class="topics__meta">
                    <p class="topics__date"><?php the_time('Y.m.d') ?></p><!-- /.topics__date -->
                    <?php
                        $cats =  get_the_category();
                        foreach($cats as $cat) {
                            echo '<p class="topics__category topics__category--sub">' . $cat->name . '</p>';
                        }  
                    ?>
                                        
                </div><!-- /.topics__meta -->

                <div class="topics__wrapper u-desktop">
                    <a href="<?php the_permalink(); ?>" class="topics__title topics__title--news">
                        <?php
                        if(mb_strlen($post->post_title, 'UTF-8')>46){
                            $title= mb_substr($post->post_title, 0, 46, 'UTF-8');
                            echo $title.'...';
                        }else{
                            echo $post->post_title;
                        }
                        ?>
                    </a><!-- /.topics__title -->
                </div><!-- /.topics__wrapper -->

                <div class="topics__wrapper u-mobile">
                    <a href="<?php the_permalink(); ?>" class="topics__title topics__title--news">
                        <?php
                        if(mb_strlen($post->post_title, 'UTF-8')>40){
                            $title= mb_substr($post->post_title, 0, 40, 'UTF-8');
                            echo $title.'...';
                        }else{
                            echo $post->post_title;
                        }
                        ?>
                    </a><!-- /.topics__title -->
                </div><!-- /.topics__wrapper -->    
    </div><!-- /.topics -->
    <!-- 繰返し終了 -->

    <?php
        endforeach;
        wp_reset_postdata();
    ?>
    <div class="pagenavi pagenavi--news">
        <?php wp_pagenavi();?>
    </div><!-- /.pagenation -->
</div>
</div>
</div>
</div>




            <div class="news__button">
                <a href="<?php echo $news?>" class="button button--noline">
                    <span>read more</span>
                </a>
        </div><!-- /.about__button -->
        </div><!-- /.news__items -->
        </div><!-- /.news__content -->
    </div><!-- /.news__inner -->
</section><!-- /.news -->




<section class="contact top-contact">
    <div class="contact__inner">
        <div class="contact__textbox">
            <h2 class="contact__title">輸入車の購入や修理のご相談など<br>お気軽にお問い合わせください。</h2><!-- /.contact__title -->
            <div class="contact__button--01">
                <a href="<?php echo $contact?>" class="contact__button-text contact__button-text--01 bgleft"><span><i class="fa-regular fa-envelope"></i>お問い合わせ</span></a><!-- /.button -->
            </div><!-- /.contact__button -->
            <div class="contact__button--02">
                <a href="<?php echo $contact?>" class="contact__button-text contact__button-text--02 bgleft"><span><i class="fa-thin fa-phone"></i>0000-000-000</span></a><!-- /.button -->
            </div><!-- /.contact__button -->    
            <p class="contact__text">受付時間 : 火曜日を除く 10：00〜18：00</p><!-- /.contact__text -->
        </div><!-- /.contact__textbox -->
        <div class="contact__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/contact.jpg" alt="">
        </div><!-- /.contact__img -->
    </div><!-- /.contact__inner -->
</section><!-- /.contact -->













<?php get_footer(); ?>

