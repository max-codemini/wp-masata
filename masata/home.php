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
            <h2 class="fv-sub__title">News</h2><!-- /.fv-sub__title -->
            <p class="fv-sub__subtitle">お知らせ</p><!-- /.fv-sub__subtitle -->
        </div><!-- /.fv-sub__head -->
        <div class="fv-sub__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/fv-news.jpg" alt="">
        </div><!-- /.fv-sub__img -->
    </div><!-- /.fv-sub__inner -->
</div><!-- /.fv-sub -->


<div class="breadcrumb breadcrumb--news">
    <div class="breadcrumb__inner">
        <?php if(function_exists('bcn_display'))
        {
        bcn_display();
        }?>
    </div><!-- /.breadcrumb__inner -->
</div>







<section class="news news--sub">
    <div class="news__inner news__inner--sub">
        <div class="news__wrapper">
            <div class="news__tab-panel tab-panel">
                <!--タブ-->
                <ul class="js-tab-group tab-panel__tab-group category__list category__list--news">
                    <li class="js-tab tab-panel__tab tab-A is-active"><a>すべてのお知らせ</a></li>
                    <li class="js-tab tab-panel__tab tab-B"><a>トピックス</a></li>
                    <li class="js-tab tab-panel__tab tab-C"><a>イベント・キャンペーン</a></li>
                    <li class="js-tab tab-panel__tab tab-D"><a>入庫車情報</a></li>
                </ul>

                <!--タブを切り替えて表示するコンテンツ-->
                <div class="js-panel-group tab-panel__panel-group tab-panel__panel-group--news">

                    <!-- AAAAAAAA -->
                    <div class="js-panel tab-panel__panel tab-A is-show">

                    <?php if (have_posts()): ?>
                        <?php while (have_posts()) : the_post(); ?>
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
                            <?php endwhile; ?>
                        <?php else: ?>
                    <?php endif; ?>
                    <div class="pagenavi pagenavi--news">
                        <?php wp_pagenavi();?>
                    </div><!-- /.pagenation -->
                    </div>




                    <!-- BBBBBBBB -->
                    <div class="js-panel tab-panel__panel tab-B">

                        <?php
                            $newslist = get_posts( array(
                                'category_name' => 'topics', //特定のカテゴリースラッグを指定
                                'posts_per_page' => 6 //取得記事件数
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
                                'posts_per_page' => 6 //取得記事件数
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
                                'posts_per_page' => 6 //取得記事件数
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
                </div>
            </div>
        </div>
    </div>
</section>

















<section class="contact newspage-contact">
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






















