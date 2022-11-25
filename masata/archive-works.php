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
            <h2 class="fv-sub__title">Works</h2><!-- /.fv-sub__title -->
            <p class="fv-sub__subtitle">実績紹介</p><!-- /.fv-sub__subtitle -->
        </div><!-- /.fv-sub__head -->
        <div class="fv-sub__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/fv-works.jpg" alt="">
        </div><!-- /.fv-sub__img -->
    </div><!-- /.fv-sub__inner -->
</div><!-- /.fv-sub -->

<div class="breadcrumb breadcrumb--archive-works">
    <div class="breadcrumb__inner">
        <?php if(function_exists('bcn_display'))
        {
        bcn_display();
        }?>
    </div><!-- /.breadcrumb__inner -->
</div>












<section class="archive-works archive-works--sub">
    <div class="archive-works__inner archive-works__inner--sub">
        <div class="archive-works__wrapper">
            <div class="archive-works__tab-panel tab-panel">
                <!--タブ-->
                <ul class="js-tab-group tab-panel__tab-group category__list category__list--archive-works">
                    <li class="js-tab tab-panel__tab archive-A is-active"><a>すべてのお知らせ</a></li>
                    <li class="js-tab tab-panel__tab archive-B"><a>修理・整備</a></li>
                    <li class="js-tab tab-panel__tab archive-C"><a>購入サポート</a></li>
                    <li class="js-tab tab-panel__tab archive-D"><a>車検・点検</a></li>
                </ul>
            </div>

            <!--タブを切り替えて表示するコンテンツ-->
            <div class="js-panel-group tab-panel__panel-group">

                <!-- AAAAAAAA -->
                <div class="js-panel tab-panel__panel archive-A is-show">
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
                'posts_per_page' => 6,  
                'order' => 'DESC',
                'orderby' => 'date',
                'post_status' => 'publish'
                );
                $myquery = new WP_Query( $args );
            ?>
                    <?php if ( $myquery->have_posts()): ?>
                        <?php while($myquery->have_posts()): $myquery->the_post(); ?>
                    
                            <!-- //繰返し処理 -->
                            <div href="<?php the_permalink(); ?>" class=" tab-panel__item archive-works__item topics" data-aos="fade-up">
                                <div class="topics__inner topics__inner--archive-works">
                                    <div class="archive-works__img">
                                        <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                                    </div><!-- /.archive-works__img -->
                                    <div class="topics__body topics__body--works-archive">
                                        <div class="topics__meta">

                                        <?php
                                        if ($terms = get_the_terms($post->ID, 'works_category')) {
                                            foreach ( $terms as $term ) {
                                                echo ('<p class="topics__category topics__category--archive-works">') ;
                                                echo esc_html($term->name)  ;
                                                echo (' </p>') ;
                                            }
                                        }
                                        ?>
                        
                                        </div><!-- /.topics__meta -->

                                        <div class="topics__wrapper u-desktop">
                                            <a href="<?php the_permalink(); ?>" class="topics__title topics__title--archive-works">
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
                                            <a href="<?php the_permalink(); ?>" class="topics__title topics__title--archive-works">
                                                <?php
                                                    if(mb_strlen($post->post_title, 'UTF-8')>24){
                                                        $title= mb_substr($post->post_title, 0, 24, 'UTF-8');
                                                        echo $title.'...';
                                                    }else{
                                                        echo $post->post_title;
                                                    }
                                                ?>
                                            </a><!-- /.topics__title -->
                                        </div><!-- /.topics__wrapper -->
                                        <p class="topics__date topics__date--works-archive"><?php the_time('Y.m.d') ?></p><!-- /.topics__date -->
                                    </div><!-- /.topics__body -->
                                </div><!-- /.topics__inner -->      
                            </div>
                            <!-- 繰返し終了 -->

                        <?php endwhile; ?>
                    <?php endif; ?>
                    <div class="pagenavi pagenavi--archive-works">
                        <?php $my_query = new WP_Query( $args );?>
                        <?php if(function_exists('wp_pagenavi')){
                            wp_pagenavi(array('query'=>$my_query));
                        }?>
                    </div><!-- /.pagenavi -->
                </div>









                <!-- BBBBBBBBBBB -->
                <div class="js-panel tab-panel__panel archive-B">
                    <?php
                        global $query_string;
                                        query_posts(
                            Array(
                                'post_type' => array( 'works' ),  //カスタム投稿タイプ名を記載
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'works_category', //タクソノミー名を指定
                                        'field' => 'slug',   //'term_id'、'slug'などのフィールド名を指定
                                        'terms' => 'remake',  //タクソノミーの値を指定
                                        'operator'  => 'IN'  //'AND'、'IN'、'NOT IN'の何れかを指定
                                    )
                                ),
                                'showposts' => 6,
                                'posts_per_page' => 6,
                                'paged' => get_query_var('paged')
                            )
                        );
                        if (have_posts()) {
                            while (have_posts()) {
                                the_post();
                    ?>
    

                    <!-- //繰返し処理 -->
                    <div href="<?php the_permalink(); ?>" class=" tab-panel__item archive-works__item topics">
                        <div class="topics__inner topics__inner--archive-works">
                            <div class="archive-works__img">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                            </div><!-- /.archive-works__img -->
                            <div class="topics__body topics__body--works-archive">
                                <div class="topics__meta">

                                    <?php
                                        if ($terms = get_the_terms($post->ID, 'works_category')) {
                                            foreach ( $terms as $term ) {
                                                echo ('<p class="topics__category topics__category--archive-works">') ;
                                                echo esc_html($term->name)  ;
                                                echo (' </p>') ;
                                            }
                                        }
                                        ?>
                
                                </div><!-- /.topics__meta -->

                                <div class="topics__wrapper u-desktop">
                                    <a href="<?php the_permalink(); ?>" class="topics__title topics__title--archive-works">
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
                                    <a href="<?php the_permalink(); ?>" class="topics__title topics__title--archive-works">
                                        <?php
                                            if(mb_strlen($post->post_title, 'UTF-8')>24){
                                                $title= mb_substr($post->post_title, 0, 24, 'UTF-8');
                                                echo $title.'...';
                                            }else{
                                                echo $post->post_title;
                                            }
                                        ?>
                                    </a><!-- /.topics__title -->
                                </div><!-- /.topics__wrapper -->
                                <p class="topics__date topics__date--works-archive"><?php the_time('Y.m.d') ?></p><!-- /.topics__date -->
                            </div><!-- /.topics__body -->
                        </div><!-- /.topics__inner -->      
                    </div>
                    <!-- 繰返し終了 -->
                    <?php
                            }
                        }else{
                        }
                        wp_reset_query();
                    ?>
                    
                    <div class="pagenavi pagenavi--archive-works">
                        <?php $my_query = new WP_Query( $args );?>
                        <?php if(function_exists('wp_pagenavi')){
                            wp_pagenavi(array('query'=>$my_query));
                        }?>
                    </div><!-- /.pagenavi -->
                </div>






                
            
                




















                



                <!-- CCCCCCCCC -->
                <div class="js-panel tab-panel__panel archive-C">
                    <?php
                        global $query_string;
                                    query_posts(
                        Array(
                            'post_type' => array( 'works' ),  //カスタム投稿タイプ名を記載
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'works_category', //タクソノミー名を指定
                                    'field' => 'slug',   //'term_id'、'slug'などのフィールド名を指定
                                    'terms' => 'support',  //タクソノミーの値を指定
                                    'operator'  => 'IN'  //'AND'、'IN'、'NOT IN'の何れかを指定
                                )
                            ),
                            'showposts' => 6,
                            'posts_per_page' => 6,
                            'paged' => get_query_var('paged')
                        )
                        );      
                        if (have_posts()) {
                        while (have_posts()) {
                            the_post();
                    ?>
    

                            <!-- //繰返し処理 -->
                            <div href="<?php the_permalink(); ?>" class=" tab-panel__item archive-works__item topics">
                                <div class="topics__inner topics__inner--archive-works">
                                    <div class="archive-works__img">
                                        <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                                    </div><!-- /.archive-works__img -->
                                    <div class="topics__body topics__body--works-archive">
                                        <div class="topics__meta">

                                            <?php
                                                if ($terms = get_the_terms($post->ID, 'works_category')) {
                                                    foreach ( $terms as $term ) {
                                                        echo ('<p class="topics__category topics__category--archive-works">') ;
                                                        echo esc_html($term->name)  ;
                                                        echo (' </p>') ;
                                                    }
                                                }
                                                ?>
                        
                                        </div><!-- /.topics__meta -->

                                        <div class="topics__wrapper u-desktop">
                                            <a href="<?php the_permalink(); ?>" class="topics__title topics__title--archive-works">
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
                                            <a href="<?php the_permalink(); ?>" class="topics__title topics__title--archive-works">
                                                <?php
                                                    if(mb_strlen($post->post_title, 'UTF-8')>24){
                                                        $title= mb_substr($post->post_title, 0, 24, 'UTF-8');
                                                        echo $title.'...';
                                                    }else{
                                                        echo $post->post_title;
                                                    }
                                                ?>
                                            </a><!-- /.topics__title -->
                                        </div><!-- /.topics__wrapper -->
                                        <p class="topics__date topics__date--works-archive"><?php the_time('Y.m.d') ?></p><!-- /.topics__date -->
                                    </div><!-- /.topics__body -->
                                </div><!-- /.topics__inner -->      
                            </div>
                            <!-- 繰返し終了 -->





                        <?php
                            }
                        }else{
                        }
                        wp_reset_query();
                        ?>








                    

                    
                        
                        
                    <div class="pagenavi pagenavi--archive-works">
                        <?php $my_query = new WP_Query( $args );?>
                        <?php if(function_exists('wp_pagenavi')){
                            wp_pagenavi(array('query'=>$my_query));
                        }?>
                    </div><!-- /.pagenavi -->
                </div>






                
            
                











                <!-- DDDDDDDDDD -->
                <div class="js-panel tab-panel__panel">
                
                    <?php
                        global $query_string;
                                        query_posts(
                            Array(
                                'post_type' => array( 'works' ),  //カスタム投稿タイプ名を記載
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'works_category', //タクソノミー名を指定
                                        'field' => 'slug',   //'term_id'、'slug'などのフィールド名を指定
                                        'terms' => 'check',  //タクソノミーの値を指定
                                        'operator'  => 'IN'  //'AND'、'IN'、'NOT IN'の何れかを指定
                                    )
                                ),
                                'showposts' => 6,
                                'posts_per_page' => 6,
                                'paged' => get_query_var('paged')
                            )
                        );
                        if (have_posts()) {
                            while (have_posts()) {
                                the_post();
                    ?>
    

                    <!-- //繰返し処理 -->
                    <div href="<?php the_permalink(); ?>" class=" tab-panel__item archive-works__item topics" data-aos="fade-up">
                        <div class="topics__inner topics__inner--archive-works">
                            <div class="archive-works__img">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                            </div><!-- /.archive-works__img -->
                            <div class="topics__body topics__body--works-archive">
                                <div class="topics__meta">

                                    <?php
                                        if ($terms = get_the_terms($post->ID, 'works_category')) {
                                            foreach ( $terms as $term ) {
                                                echo ('<p class="topics__category topics__category--archive-works">') ;
                                                echo esc_html($term->name)  ;
                                                echo (' </p>') ;
                                            }
                                        }
                                    ?>
                        
                                </div><!-- /.topics__meta -->

                                <div class="topics__wrapper u-desktop">
                                    <a href="<?php the_permalink(); ?>" class="topics__title topics__title--archive-works">
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
                                    <a href="<?php the_permalink(); ?>" class="topics__title topics__title--archive-works">
                                        <?php
                                            if(mb_strlen($post->post_title, 'UTF-8')>24){
                                                $title= mb_substr($post->post_title, 0, 24, 'UTF-8');
                                                echo $title.'...';
                                            }else{
                                                echo $post->post_title;
                                            }
                                        ?>
                                    </a><!-- /.topics__title -->
                                </div><!-- /.topics__wrapper -->
                                <p class="topics__date topics__date--works-archive"><?php the_time('Y.m.d') ?></p><!-- /.topics__date -->
                            </div><!-- /.topics__body -->
                        </div><!-- /.topics__inner -->      
                    </div>
                    <!-- 繰返し終了 -->

                    <?php
                            }
                        }else{
                        }
                        wp_reset_query();
                    ?>

                    <div class="pagenavi pagenavi--archive-works">
                        <?php $my_query = new WP_Query( $args );?>
                        <?php if(function_exists('wp_pagenavi')){
                            wp_pagenavi(array('query'=>$my_query));
                        }?>
                    </div><!-- /.pagenavi -->
                </div>






                
            
                




            </div>
        </div>
    </div><!-- /.archive-works__inner -->
</section><!-- /.archive-works -->









































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