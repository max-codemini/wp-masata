<?php get_header(); ?>

<ul class="pc-nav__items">
            <li class="pc-nav__item">
              <a class="pc-nav__link" href="<?php echo $home ?>">top</a>
            </li><!-- /.pc-nav__item -->
            <li class="pc-nav__item">
              <a class="pc-nav__link" href="<?php echo $about ?>">about</a>
            </li><!-- /.pc-nav__item -->
            <li class="pc-nav__item pc-nav__item--service">
              <a  class="pc-nav__link" href="<?php echo $service ?>" class="js-service">service</a>
                      
            </li><!-- /.pc-nav__item -->
            <li class="pc-nav__item">
              <a class="pc-nav__link" href="<?php echo $works?>">works</a>
            </li><!-- /.pc-nav__item -->
            <li class="pc-nav__item">
              <a class="pc-nav__link" href="<?php echo $news ?>">news</a>
            </li><!-- /.pc-nav__item -->
            <li class="pc-nav__item">
              <a class="pc-nav__link" href="<?php echo $contact ?>"><span><i class="fa-regular fa-envelope"></i></span>contact</a>
            </li><!-- /.pc-nav__item -->
          </ul><!-- /.pc-nav__items -->





          <ul class="footer-nav__items">
                        <li class="footer-nav__item">
                        <a href="#">top</a>
                        </li><!-- /"footer-nav__item -->
                        <li class="footer-nav__item">
                        <a href="#news">about</a>
                        </li><!-- /"footer-nav__item -->
                        <li class="footer-nav__item">
                        <a href="#content">service</a>
                        </li><!-- /"footer-nav__item -->
                        <li class="footer-nav__item">
                        <a href="#works">works</a>
                        </li><!-- /"footer-nav__item -->
                        <li class="footer-nav__item">
                        <a href="#overview">news</a>
                        </li><!-- /"footer-nav__item -->
                        <li class="footer-nav__item">
                        <a href="blog.html">contact</a>
                        </li><!-- /"footer-nav__item -->
                        <li class="footer-nav__item">
                        <a href="#contact">プライバシーポリシー</a>
                        </li><!-- /"footer-nav__item -->
                    </ul><!-- /.footer-nav__items -->








                    <div class="cat_list">
    <?php
        $categories = get_categories();
        foreach ($categories as $category):
    ?>
    <h2><a href="<?php echo esc_url(get_category_link($category->term_id)); ?>"><?php echo $category->name; ?></a></h2>
    <?php
        $my_query = new WP_Query(
            array(
                'cat' => $category->term_id,
                'posts_per_page' => 3,
            ));
        if ($my_query->have_posts()):
    ?>
        <ul>
        <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        <?php endwhile; ?>
        </ul>
    <?php wp_reset_postdata(); ?>
    <?php else: ?>
        <p>投稿はありません。</p>
    <?php endif; ?>
    <?php endforeach; ?>
</div>





<div class="cat_list">
    <?php
        $categories = get_categories();
        foreach ($categories as $category):
    ?>
    <h2><a href="<?php echo esc_url(get_category_link($category->term_id)); ?>"><?php echo $category->name; ?></a></h2>
    <!--ここにサブループを記述-->
    <?php endforeach; ?>
</div>




















<section class="news news--sub">
    <div class="news__inner news__inner--sub">
        <div class="news__content">
            <div class="news__wrapper">
                <div class="news__category category category--news">
                    <ul class="category__list category__list--news">
                        <li><a href="">すべてのお知らせ</a></li>
                        <li><a href="">トピックス</a></li>
                        <li><a href="">イベント・キャンペーン</a></li>
                        <li><a href="">入庫車情報</a></li>
                    </ul><!-- /.news__category-list -->
                </div><!-- /.news__category-box -->
            </div><!-- /.news__wrapper -->
            <div class="news__items news__items--sub">
                <?php if (have_posts()): ?>
                    <?php while (have_posts()) : the_post(); ?>

                            <!-- //繰返し処理 -->
                        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <div class="news__item topics" data-aos="fade-up">
                                <div class="topics__inner">
                                    <div class="topics__body">
                                        <div class="topics__meta">
                                            <p class="topics__date"><?php echo get_the_date(); ?></p><!-- /.topics__date -->
                                            <?php
                                            $categories = get_categories();
                                            foreach( $categories as $category ) {
                                            echo '<p class="topics__category topics__category--sub">'.$category->name.'</p>';
                                            }
                                            ?></p><!-- /.warks-card__category -->
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
                        </div>
                                                    <!-- 繰返し終了 -->

                        <?php endwhile; ?>
                    <?php else: ?>
                <?php endif; ?>
                <div class="pagenavi pagenavi--newspc u-desktop">
                    <?php wp_pagenavi();?>
                </div><!-- /.pagenation -->
            </div><!-- /.news__items -->
        </div><!-- /.news__content -->
    </div><!-- /.news__inner -->
    <div class="pagenavi pagenavi--newssp u-mobile">
        <?php wp_pagenavi();?>
    </div><!-- /.pagenation -->
</section><!-- /.news -->










<section class="news news--sub">
    <div class="news__inner news__inner--sub">
        <div class="news__content">
            <div class="news__wrapper">
                <div class="news__category category category--news">
                    <ul class="category__list category__list--news">
                        <li><a href="">すべてのお知らせ</a></li>
                        <li><a href="">トピックス</a></li>
                        <li><a href="">イベント・キャンペーン</a></li>
                        <li><a href="">入庫車情報</a></li>
                    </ul><!-- /.news__category-list -->
                </div><!-- /.news__category-box -->
            </div><!-- /.news__wrapper -->
            <div class="news__items news__items--sub">
            </div>
        </div>
    </div>
</section>























<section class="news news--sub">
    <div class="news__inner news__inner--sub">
        <div class="news__content">
            <div class="news__wrapper">
                <div class="news__category category category--news">
                    <ul class="category__list category__list--news">
                        
                    







<div class="full_content">
<div class="news__items">
<!-- すべてのカテゴリー-->
<div class="news__item">

<div class="tabcontent">
    <dl>
        <?php if (have_posts()): ?>
            <?php while (have_posts()) : the_post(); ?>
                <!-- //繰返し処理 -->
                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="news__item topics" data-aos="fade-up">
                        <div class="topics__inner">
                            <div class="topics__body">
                                <div class="topics__meta">
                                    <p class="topics__date"><?php echo get_the_date(); ?></p><!-- /.topics__date -->
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
                </div>
                <!-- 繰返し終了 -->
                <?php endwhile; ?>
            <?php else: ?>
        <?php endif; ?>
        <div class="pagenavi pagenavi--newspc u-desktop">
            <?php wp_pagenavi();?>
        </div><!-- /.pagenation -->
    </dl> 
</div>
</div><!-- /.news__item -->

<!-- 千代田区の施工事例取得 -->
<div class="tabmenu mr01"><a>トピックス</a></div>
<div class="tabcontent">
<dl>
<?php
   $newslist = get_posts( array(
    'category_name' => 'topics', //特定のカテゴリースラッグを指定
    'posts_per_page' => 10 //取得記事件数
  ));
    foreach( $newslist as $post ):
    setup_postdata( $post );
?>

<!-- //繰返し処理 -->
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <div class="news__item topics">
                                <div class="topics__inner">
                                    <div class="topics__body">
                                        <div class="topics__meta">
                                            <p class="topics__date"><?php echo get_the_date(); ?></p><!-- /.topics__date -->
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
                        </div>
                                                    <!-- 繰返し終了 -->





<?php
  endforeach;
  wp_reset_postdata();
?>
<div class="pagenavi pagenavi--newspc u-desktop">
            <?php wp_pagenavi();?>
        </div><!-- /.pagenation -->
</dl> 
</div>

<!-- 世田谷区の施工事例取得 -->
<div class="tabmenu mr01"><a>イベント・キャンペーン</a></div>
<div class="tabcontent">

<dl>
<?php
   $newslist = get_posts( array(
    'category_name' => 'event', //特定のカテゴリースラッグを指定
    'posts_per_page' => 10 //取得記事件数
  ));
    foreach( $newslist as $post ):
    setup_postdata( $post );
?>




<!-- //繰返し処理 -->
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <div class="news__item topics">
                                <div class="topics__inner">
                                    <div class="topics__body">
                                        <div class="topics__meta">
                                            <p class="topics__date"><?php echo get_the_date(); ?></p><!-- /.topics__date -->
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
                        </div>
                                                    <!-- 繰返し終了 -->











<?php
  endforeach;
  wp_reset_postdata();
?>
</dl> 
</div>

<!-- 杉並区の施工事例取得 -->
<div class="tabmenu"><a>入庫者情報</a></div>
<div class="tabcontent">

<dl>
<?php
   $newslist = get_posts( array(
    'category_name' => 'infomation', //特定のカテゴリースラッグを指定
    'posts_per_page' => 10 //取得記事件数
  ));
    foreach( $newslist as $post ):
    setup_postdata( $post );
?>




<!-- //繰返し処理 -->
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <div class="news__item topics">
                                <div class="topics__inner">
                                    <div class="topics__body">
                                        <div class="topics__meta">
                                            <p class="topics__date"><?php echo get_the_date(); ?></p><!-- /.topics__date -->
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
                        </div>
                                                    <!-- 繰返し終了 -->










<?php
  endforeach;
  wp_reset_postdata();
?>
</dl> 
</div>

</div>



</ul><!-- /.news__category-list -->
                </div><!-- /.news__category-box -->
            </div><!-- /.news__wrapper -->

        </div>

        </div>
    </div>
</section>


























<?php if (have_posts()): ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <!-- //繰返し処理 -->
                            
                            <div class="tab-panel__item topics" data-aos="fade-up">
                                <div class="topics__inner">
                                    <div class="topics__body">
                                        <div class="topics__meta">
                                            <p class="topics__date"><?php echo get_the_date(); ?></p><!-- /.topics__date -->
                                            
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
                    <div class="pagenavi pagenavi--news u-desktop">
                        <?php wp_pagenavi();?>
                    </div><!-- /.pagenation -->
                    </div>










                    <div class="contact-sub">
    <div class="contact-sub__inner">
        <p class="contact-sub__text">
            弊社へのお問い合わせは<br>
            下記フォームより受け付けております。<br>
            担当者が確認後、折り返しご連絡させていただきます。
        </p>
        <div class="contact-sub__form form">
            <?php echo do_shortcode('[mwform_formkey key="289"]'); ?>
        </div>
    </div><!-- /.contact-sub__inner -->
</div><!-- /.contact-sub -->





<div class="contact-sub__inner">
        <p class="contact-sub__text">
            弊社へのお問い合わせは<br>
            下記フォームより受け付けております。<br>
            担当者が確認後、折り返しご連絡させていただきます。
        </p>
        <div class="contact-sub__form form">
            <div id="mw_wp_form_mw-wp-form-289" class="mw_wp_form mw_wp_form_input  ">
					<form method="post" action="" enctype="multipart/form-data"><div class="form__item confirm-hidden">
<p class="form__title">会社名<span class="mark">*</span><br class="u-mobile"><span class="form__subtitle confirm-hidden">個人の場合は「個人」と入力してください</span></p>

<div class="form__text">
<input type="text" name="company-name" size="60" value="" placeholder="例）株式会社ABC">
</div>
</div>
<div class="form__item confirm-hidden">
<p class="form__title">ご担当者名<span class="mark">*</span><br class="u-mobile"><span class="form__subtitle confirm-hidden">個人の場合は氏名を入力してください</span></p>

<div class="form__text">
<input type="text" name="name" size="60" value="" placeholder="例）輸入車　太郎">
</div>
</div>
<div class="form__item confirm-hidden">
<p class="form__title">電話番号<span class="mark">*</span></p>

<div class="form__text">
<input type="text" name="phonenumber" size="60" value="" placeholder="例）022-000-0000">
</div>
</div>
<div class="form__item confirm-hidden">
<p class="form__title">メールアドレス<span class="mark">*</span></p>

<div class="form__text">
<input type="text" name="mail" size="60" value="" placeholder="例）abcdefghijk@lusso.co.jp">
</div>
</div>
<div class="form__item confirm-hidden">
<p class="form__title">お問い合わせの種類<span class="mark">*</span></p>

<div class="form__text">
<select name="select" class="form__select">
			<option value="選択してください">
			選択してください		</option>
			<option value="購入サポート">
			購入サポート		</option>
			<option value="修理・整備">
			修理・整備		</option>
			<option value="車検・点検">
			車検・点検		</option>
	</select>

<input type="hidden" name="__children[select][]" value="{&quot;\u9078\u629e\u3057\u3066\u304f\u3060\u3055\u3044&quot;:&quot;\u9078\u629e\u3057\u3066\u304f\u3060\u3055\u3044&quot;,&quot;\u8cfc\u5165\u30b5\u30dd\u30fc\u30c8&quot;:&quot;\u8cfc\u5165\u30b5\u30dd\u30fc\u30c8&quot;,&quot;\u4fee\u7406\u30fb\u6574\u5099&quot;:&quot;\u4fee\u7406\u30fb\u6574\u5099&quot;,&quot;\u8eca\u691c\u30fb\u70b9\u691c&quot;:&quot;\u8eca\u691c\u30fb\u70b9\u691c&quot;}">
</div>
</div>
<div class="form__item form__item--textarea confirm-hidden">
<p class="form__title form__title--textarea">お問い合わせ内容<span class="mark">*</span></p>

<div class="form__textarea">
<textarea name="textarea" cols="50" rows="5"></textarea>
</div>
</div>
<div class="form__item form__item--check confirm-hidden">

<label><span class="mark">*</span><input class="form__check" name="check-name" type="checkbox"><span></span>「個人情報の取り扱いについて」同意する</label>

</div>




<button type="button" name="" value="button">確認する</button>

<input type="hidden" id="mw_wp_form_token" name="mw_wp_form_token" value="12fac9f266"><input type="hidden" name="_wp_http_referer" value="/contact/"><input type="hidden" name="mw-wp-form-form-id" value="289"><input type="hidden" name="mw-wp-form-form-verify-token" value="446399dc2d0c86f3119cd79022b44004524a056d"></form>
				<!-- end .mw_wp_form --></div>        </div>
    </div>




<?php get_footer(); ?>