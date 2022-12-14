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
                        <a href="#contact">??????????????????????????????</a>
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
        <p>???????????????????????????</p>
    <?php endif; ?>
    <?php endforeach; ?>
</div>





<div class="cat_list">
    <?php
        $categories = get_categories();
        foreach ($categories as $category):
    ?>
    <h2><a href="<?php echo esc_url(get_category_link($category->term_id)); ?>"><?php echo $category->name; ?></a></h2>
    <!--?????????????????????????????????-->
    <?php endforeach; ?>
</div>




















<section class="news news--sub">
    <div class="news__inner news__inner--sub">
        <div class="news__content">
            <div class="news__wrapper">
                <div class="news__category category category--news">
                    <ul class="category__list category__list--news">
                        <li><a href="">????????????????????????</a></li>
                        <li><a href="">???????????????</a></li>
                        <li><a href="">?????????????????????????????????</a></li>
                        <li><a href="">???????????????</a></li>
                    </ul><!-- /.news__category-list -->
                </div><!-- /.news__category-box -->
            </div><!-- /.news__wrapper -->
            <div class="news__items news__items--sub">
                <?php if (have_posts()): ?>
                    <?php while (have_posts()) : the_post(); ?>

                            <!-- //??????????????? -->
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
                                                    <!-- ??????????????? -->

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
                        <li><a href="">????????????????????????</a></li>
                        <li><a href="">???????????????</a></li>
                        <li><a href="">?????????????????????????????????</a></li>
                        <li><a href="">???????????????</a></li>
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
<!-- ???????????????????????????-->
<div class="news__item">

<div class="tabcontent">
    <dl>
        <?php if (have_posts()): ?>
            <?php while (have_posts()) : the_post(); ?>
                <!-- //??????????????? -->
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
                <!-- ??????????????? -->
                <?php endwhile; ?>
            <?php else: ?>
        <?php endif; ?>
        <div class="pagenavi pagenavi--newspc u-desktop">
            <?php wp_pagenavi();?>
        </div><!-- /.pagenation -->
    </dl> 
</div>
</div><!-- /.news__item -->

<!-- ????????????????????????????????? -->
<div class="tabmenu mr01"><a>???????????????</a></div>
<div class="tabcontent">
<dl>
<?php
   $newslist = get_posts( array(
    'category_name' => 'topics', //?????????????????????????????????????????????
    'posts_per_page' => 10 //??????????????????
  ));
    foreach( $newslist as $post ):
    setup_postdata( $post );
?>

<!-- //??????????????? -->
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
                                                    <!-- ??????????????? -->





<?php
  endforeach;
  wp_reset_postdata();
?>
<div class="pagenavi pagenavi--newspc u-desktop">
            <?php wp_pagenavi();?>
        </div><!-- /.pagenation -->
</dl> 
</div>

<!-- ????????????????????????????????? -->
<div class="tabmenu mr01"><a>?????????????????????????????????</a></div>
<div class="tabcontent">

<dl>
<?php
   $newslist = get_posts( array(
    'category_name' => 'event', //?????????????????????????????????????????????
    'posts_per_page' => 10 //??????????????????
  ));
    foreach( $newslist as $post ):
    setup_postdata( $post );
?>




<!-- //??????????????? -->
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
                                                    <!-- ??????????????? -->











<?php
  endforeach;
  wp_reset_postdata();
?>
</dl> 
</div>

<!-- ?????????????????????????????? -->
<div class="tabmenu"><a>???????????????</a></div>
<div class="tabcontent">

<dl>
<?php
   $newslist = get_posts( array(
    'category_name' => 'infomation', //?????????????????????????????????????????????
    'posts_per_page' => 10 //??????????????????
  ));
    foreach( $newslist as $post ):
    setup_postdata( $post );
?>




<!-- //??????????????? -->
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
                                                    <!-- ??????????????? -->










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
                            <!-- //??????????????? -->
                            
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
                            <!-- ??????????????? -->
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
            ?????????????????????????????????<br>
            ??????????????????????????????????????????????????????<br>
            ???????????????????????????????????????????????????????????????????????????
        </p>
        <div class="contact-sub__form form">
            <?php echo do_shortcode('[mwform_formkey key="289"]'); ?>
        </div>
    </div><!-- /.contact-sub__inner -->
</div><!-- /.contact-sub -->





<div class="contact-sub__inner">
        <p class="contact-sub__text">
            ?????????????????????????????????<br>
            ??????????????????????????????????????????????????????<br>
            ???????????????????????????????????????????????????????????????????????????
        </p>
        <div class="contact-sub__form form">
            <div id="mw_wp_form_mw-wp-form-289" class="mw_wp_form mw_wp_form_input  ">
					<form method="post" action="" enctype="multipart/form-data"><div class="form__item confirm-hidden">
<p class="form__title">?????????<span class="mark">*</span><br class="u-mobile"><span class="form__subtitle confirm-hidden">?????????????????????????????????????????????????????????</span></p>

<div class="form__text">
<input type="text" name="company-name" size="60" value="" placeholder="??????????????????ABC">
</div>
</div>
<div class="form__item confirm-hidden">
<p class="form__title">???????????????<span class="mark">*</span><br class="u-mobile"><span class="form__subtitle confirm-hidden">???????????????????????????????????????????????????</span></p>

<div class="form__text">
<input type="text" name="name" size="60" value="" placeholder="????????????????????????">
</div>
</div>
<div class="form__item confirm-hidden">
<p class="form__title">????????????<span class="mark">*</span></p>

<div class="form__text">
<input type="text" name="phonenumber" size="60" value="" placeholder="??????022-000-0000">
</div>
</div>
<div class="form__item confirm-hidden">
<p class="form__title">?????????????????????<span class="mark">*</span></p>

<div class="form__text">
<input type="text" name="mail" size="60" value="" placeholder="??????abcdefghijk@lusso.co.jp">
</div>
</div>
<div class="form__item confirm-hidden">
<p class="form__title">???????????????????????????<span class="mark">*</span></p>

<div class="form__text">
<select name="select" class="form__select">
			<option value="????????????????????????">
			????????????????????????		</option>
			<option value="??????????????????">
			??????????????????		</option>
			<option value="???????????????">
			???????????????		</option>
			<option value="???????????????">
			???????????????		</option>
	</select>

<input type="hidden" name="__children[select][]" value="{&quot;\u9078\u629e\u3057\u3066\u304f\u3060\u3055\u3044&quot;:&quot;\u9078\u629e\u3057\u3066\u304f\u3060\u3055\u3044&quot;,&quot;\u8cfc\u5165\u30b5\u30dd\u30fc\u30c8&quot;:&quot;\u8cfc\u5165\u30b5\u30dd\u30fc\u30c8&quot;,&quot;\u4fee\u7406\u30fb\u6574\u5099&quot;:&quot;\u4fee\u7406\u30fb\u6574\u5099&quot;,&quot;\u8eca\u691c\u30fb\u70b9\u691c&quot;:&quot;\u8eca\u691c\u30fb\u70b9\u691c&quot;}">
</div>
</div>
<div class="form__item form__item--textarea confirm-hidden">
<p class="form__title form__title--textarea">????????????????????????<span class="mark">*</span></p>

<div class="form__textarea">
<textarea name="textarea" cols="50" rows="5"></textarea>
</div>
</div>
<div class="form__item form__item--check confirm-hidden">

<label><span class="mark">*</span><input class="form__check" name="check-name" type="checkbox"><span></span>?????????????????????????????????????????????????????????</label>

</div>




<button type="button" name="" value="button">????????????</button>

<input type="hidden" id="mw_wp_form_token" name="mw_wp_form_token" value="12fac9f266"><input type="hidden" name="_wp_http_referer" value="/contact/"><input type="hidden" name="mw-wp-form-form-id" value="289"><input type="hidden" name="mw-wp-form-form-verify-token" value="446399dc2d0c86f3119cd79022b44004524a056d"></form>
				<!-- end .mw_wp_form --></div>        </div>
    </div>




<?php get_footer(); ?>