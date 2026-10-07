<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package index
 */

?>
<!-- FOOTER PAGE : begin -->


<footer id="footer-page">
    <!-- top line : begin -->
    <div class="top-line">

        <!-- left column : begin -->
        <div>
            
            <span class="about-margin">Услуги</span>
        
            <?php    /**
                * Displays a navigation menu
                * @param array $args Arguments
                */
                $args = array(
                    'theme_location' => 'services',
                    'menu' => 'services',
                    'container' => 'div',
                    'container_class' => 'menu-{menu-slug}-container',
                    'container_id' => '',
                    'menu_class' => 'menu',
                    'menu_id' => '',
                    'echo' => true,
                    'fallback_cb' => 'wp_page_menu',
                    'before' => '',
                    'after' => '',
                    'link_before' => '',
                    'link_after' => '',
                    'items_wrap' => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
                    'depth' => 0,
                    'walker' => ''
                );
            
                wp_nav_menu( $args ); ?>
                        <span class="about-margin"><a href="/servisny-j-tsentr-promy-shlennogo-oborudovaniya.html">О компании</a></span>
        
            <?php    /**
                * Displays a navigation menu
                * @param array $args Arguments
                */
                $args = array(
                    'theme_location' => 'about',
                    'menu' => 'about',
                    'container' => 'div',
                    'container_class' => 'menu-{menu-slug}-container',
                    'container_id' => '',
                    'menu_class' => 'menu',
                    'menu_id' => '',
                    'echo' => true,
                    'fallback_cb' => 'wp_page_menu',
                    'before' => '',
                    'after' => '',
                    'link_before' => '',
                    'link_after' => '',
                    'items_wrap' => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
                    'depth' => 0,
                    'walker' => ''
                );
            
                wp_nav_menu( $args ); ?>
        
        </div>
        <!-- left column : end -->
       <div>
        
            <span class="about-margin">Производители</span>
        
           <?php    /**
                * Displays a navigation menu
                * @param array $args Arguments
                */
                $args = array(
                    'theme_location' => 'production',
                    'menu' => 'production',
                    'container' => 'div',
                    'container_class' => 'menu-{menu-slug}-container',
                    'container_id' => '',
                    'menu_class' => 'menu',
                    'menu_id' => 'columns-list-footer',
                    'echo' => true,
                    'fallback_cb' => 'wp_page_menu',
                    'before' => '',
                    'after' => '',
                    'link_before' => '',
                    'link_after' => '',
                    'items_wrap' => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
                    'depth' => 0,
                    'walker' => ''
                );
            
                wp_nav_menu( $args ); ?>
        
        </div>
        <!-- center column : begin -->
        <!--<div>
        
            <span>Изготовление</span>
        
           <?php    /**
                * Displays a navigation menu
                * @param array $args Arguments
                */
                $args = array(
                    'theme_location' => 'produce',
                    'menu' => 'produce',
                    'container' => 'div',
                    'container_class' => 'menu-{menu-slug}-container',
                    'container_id' => '',
                    'menu_class' => 'menu',
                    'menu_id' => '',
                    'echo' => true,
                    'fallback_cb' => 'wp_page_menu',
                    'before' => '',
                    'after' => '',
                    'link_before' => '',
                    'link_after' => '',
                    'items_wrap' => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
                    'depth' => 0,
                    'walker' => ''
                );
            
                wp_nav_menu( $args ); ?>
        
        </div>-->
        <!-- center column : end -->
        
        <!-- right column : begin -->

        <div>
        
            <span class="about-margin">Товары</span>
        
            <?php    /**
                * Displays a navigation menu
                * @param array $args Arguments
                */
                $args = array(
                    'theme_location' => 'product',
                    'menu' => 'product',
                    'container' => 'div',
                    'container_class' => 'menu-{menu-slug}-container',
                    'container_id' => '',
                    'menu_class' => 'menu',
                    'menu_id' => '',
                    'echo' => true,
                    'fallback_cb' => 'wp_page_menu',
                    'before' => '',
                    'after' => '',
                    'link_before' => '',
                    'link_after' => '',
                    'items_wrap' => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
                    'depth' => 0,
                    'walker' => ''
                );
            
                wp_nav_menu( $args ); ?>
            
           </div>
        <!-- right column : end -->
 </div>

    <!-- top line : end -->

    <!-- bottom line : begin -->
    <div class="bottom-line">

        <!-- left column : begin -->
        <div class="left-col">
            
            <!-- logo and copyright -->
            <div><span>&copy; Сервисный Центр<br>Промышленного Оборудования</span></div>
        
        </div>

        <!-- left column : end -->
        
        <!-- center column : begin -->
        <div class="center-col">
        <div>
            
       <a href="https://remont-shpindeley.ru/kartochka-kompanii.html">Карточка компании</a><br>
	   <a href="https://remont-shpindeley.ru/pol-zovatel-skoe-soglashenie.html"> Пользовательское соглашение</a> <br>       
	   <a href="https://remont-shpindeley.ru/politika-konfidentsial-nosti.html"> Политика конфиденциальности</a><br> <br> 

</div>
            <!-- phone and address -->
            <div><b><?php echo get_theme_mod('phone');?></b><br><?php echo get_theme_mod('address');?></div>
        

        </div>
        <!-- center column : end -->
        
       
<!-- right column : begin -->
        <div class="right-col">
<div> <i>Мы используем cookies для улучшения работы сайта и анализа трафика. Используя сайт или кликая на <a href="#" title="согласиться">Я согласен</a>, вы соглашаетесь с нашей политикой использования персональных данных и cookies в соответствии с Политикой о персональных данных. Вы можете прочитать нашу политику <a href="https://remont-shpindeley.ru/politika-konfidentsial-nosti.html">здесь</a>.</i> </div> 

            
        </div>
        <!-- right column : end -->


    </div>
    <!-- bottom line : end -->

 

</footer>
<!-- FOOTER PAGE : end -->

<!-- POPUP (FEEDBACK FORM) : begin -->
<div class="popup-feedback-form">
    
    <!-- form : begin -->
    <?php echo do_shortcode('[contact-form-7 id="44" title="Заявка сверху"]'); ?>
    <!-- form : end -->

    <!-- на данный момент выставлен "display: none;" для этого блока -->
    <!-- message after : begin -->
    <div class="message-after">
        
        <div class="title">Заявка<br>отправлена!</div>

        <p>Через некоторое время<br> с вами свяжется консультант.</p>
    <div class="close"></div>
        

    </div>
    <!-- message after : end -->

    <!-- overlay -->
    <div class="overlay"></div>

</div>



<!-- POPUP (FEEDBACK FORM) : end -->

<!-- JS -->
<?php wp_footer(); ?>

<script src="/wp-content/themes/index/assets/js/build/production.js"></script>
<script src="/wp-content/themes/index/assets/js/jquery.maskedinput.js"></script>
<script type="text/javascript" src="<?=get_stylesheet_directory_uri();?>/assets/fancybox/jquery.fancybox.pack.js"></script>
<script src="/wp-content/themes/index/jqvmap/js/jquery.vmap.js" type="text/javascript"></script>
<script src="/wp-content/themes/index/jqvmap/js/maps/jquery.vmap.russia.js" type="text/javascript"></script>
<script src="/wp-content/themes/index/js/script.js"></script>
<!-- Yandex.Metrika counter --><script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter32377840 = new Ya.Metrika({ id:32377840, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="https://mc.yandex.ru/watch/32377840" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika counter -->
</body>
</html>

