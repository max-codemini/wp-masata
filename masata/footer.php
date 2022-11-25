<footer class="footer">
            <div class="footer__inner">
                <nav class="footer__nav footer-nav">
                    
                    <?php
                        $defaults = array(
                        'theme_location'  => 'footer',//メニュー位置の識別子
                            'menu'            => '',
                            'menu_class'      => 'footer-nav__items',//ulタグ クラス名
                        'depth'           => 0,
                            // 'menu_id'         => '{メニューのスラッグ}-{連番}',
                            // 'container'       => 'div',
                            // 'container_class' => 'menu-{メニューのスラッグ}-container',
                            // 'container_id'    => '',
                            // 'fallback_cb'     => 'wp_page_menu',
                            // 'before'          => '',
                            // 'after'           => '',
                            // 'link_before'     => '',
                            // 'link_after'      => '',
                            // 'echo'            => true,
                            // 'walker'          => '',
                            // 'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        
                        );
                        wp_nav_menu( $defaults );
                    ?>
                    
                </nav><!-- /.footer__nav -->
                <div class="footer__body">
                    <div class="footer__wrapper">
                    <div class="footer__title">
                        <a href="<?php echo $home ?>" class="footer__logo">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/drawer-logo.svg" alt="" /> 
                        </a><!-- /.footer__logo-->
                    </div>
                    <div class="footer__icon icon">
                        <div class="icon__items">
                            <a class="icon__item">
                                <i class="fa-brands fa-facebook"></i>
                            </a><!-- /.icon__item -->
                            <a class="icon__item">
                                <i class="fa-brands fa-twitter"></i>
                            </a><!-- /.icon__item -->
                            <a class="icon__item">
                                <i class="fa-brands fa-instagram"></i>
                            </a><!-- /.icon__item -->
                        </div><!-- /.icon__items -->
                    </div><!-- /.icon -->
                </div><!-- /.footer__wrapper -->
                <div class="footer__copy-right">
                    <p>&copy;2022 LUSSO Automobile</p>
                </div><!-- /.footer__copy-right -->
                </div><!-- /.footer__body -->
            </div><!-- /.footer__inner -->
</footer><!-- /.footer -->
        <?php wp_footer(); ?>
    </body>
</html>



