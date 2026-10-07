<?php
/*
Template Name: Главная
 */
get_header(); ?>

	
<!-- SLIDER MAIN PAGE : begin -->
<div id="slider-main-page">
    
    <!-- swiper : begin -->
    <div class="swiper-container">

        <div class="swiper-wrapper">

<?php $loop = new WP_Query( array( 'post_type' => 'slider', 'posts_per_page' => -1 ) ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
 <div class="swiper-slide">
 <a href="<?=types_render_field("url1");?>">
                <img src="<?=types_render_field("img", array("raw"=>"true"));?>" alt="">
                <img src="<?=types_render_field("img-mobile", array("raw"=>"true"));?>" alt="" class="mobile">
                <div class="text"><?=types_render_field("text");?></div>
                </a>
            </div> 
<?php endwhile; wp_reset_query(); ?>     <!-- one slide -->
                     

        </div>

        <!-- add pagination -->
        <div class="swiper-pagination"></div>

        <!-- add arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>
    <!-- swiper : end -->

</div>
<!-- SLIDER MAIN PAGE : end -->

<!-- CONTENT PAGE : begin -->
<div id="content-page">

    <?php the_content(); ?>

    <!-- how we work : begin -->
    <div class="how-we-work">
        <div class="inner-wrapper">

            <h2>Как мы работаем</h2>
            
            <span>Диагностика</span>
            
            <span>Ремонт</span>
            
            <span>Отгрузка</span>
            
            
            <div class="btn show-pp-feedback-form">Начать сотрудничество</div>

        </div>
    </div>
    <div class="about-facilities">
        <div class="inner-wrapper">

            <!-- title -->
            <div class="title">Наши преимущества</div>
                <div class="facilities-block">
               <div class="facilities-line-1">
            <div class="facilities"><img src="/wp-content/themes/index/assets/images/services/1.png" >
                <p>Бесплатная диагностика шпинделей </p>
            </div>
            <div class="facilities"><img src="/wp-content/themes/index/assets/images/services/2.png" >
                <p>Ремонт и восстановление шпинделей </p>
            </div>
            <div class="facilities"><img src="/wp-content/themes/index/assets/images/services/3.png" >
                <p>Замена шпинделя из резервного фонда </p>
            </div>
            <div class="facilities"><img src="/wp-content/themes/index/assets/images/services/4.png" >
                <p>Профилактическое обслуживание</p>
            </div>
            </div>
            <div class="facilities-line-2">
            <div class="facilities"><img src="/wp-content/themes/index/assets/images/services/5.png" >
                <p>Консультации по подбору новых шпинделей </p>
            </div>
            <div class="facilities"><img src="/wp-content/themes/index/assets/images/services/6.png" >
                <p>Консультации по эксплуатации шпинделей </p>
            </div>
            <div class="facilities"><img src="/wp-content/themes/index/assets/images/services/7.png" >
                <p>Обучение и поддержка производства</p>
            </div>
            </div>
            </div>
    </div>
    </div>
    <!-- how we work : end -->
  


    <!-- us recommend : begin -->
   <!-- <div class="us-recommend main">
        <div class="inner-wrapper">

           
            <div class="title">Нас рекомендуют</div>
            
            
            <div class="swiper-container">
            
                <div class="swiper-wrapper">
            <?php $loop = new WP_Query( array( 'post_type' => 'review', 'posts_per_page' => -1 ) ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

                
                    <div class="swiper-slide">
                        <a href="<?=types_render_field("imgfull");?>" title="<?the_title();?>" data-lightbox="reviews"><img src="<?=types_render_field("imgprew");?>" alt="<?the_title();?>"></a>
                    </div>
 <?php endwhile; wp_reset_query(); ?>            
                    
                </div>
            
         
                <div class="outer-wrapper">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            
            </div>
      

        </div>
    </div>-->
    <!-- us recommend : end -->

    <!-- news : begin -->
    <div class="news">
        <div class="inner-wrapper">

            <!-- title -->
            <div class="title">Новости</div>
            
            <!-- swiper : begin -->
            <div class="swiper-container">
            
                <div class="swiper-wrapper">
             <?php $loop = new WP_Query( array( 'post_type' => 'post', 'category_name' =>'news', 'posts_per_page' => -1 ) ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post();
$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), "Full");
 ?>
                <!-- one slide : begin -->
                    <div class="swiper-slide">
                    <a href="<?echo get_permalink();?>"><img src="<?=$imgsrc[0]?>" alt="<?the_title();?>" class="selected"></a>

                        <div class="date"><?php echo get_the_date();?></div>
                        <?php the_excerpt(); ?>  
                        <br>
                        <a href="<?php the_permalink(); ?>" class="btn">Подробнее</a>

                    </div>
                <!-- one slide : end -->
<?php endwhile; wp_reset_query(); ?> 
                </div>
            
                <!-- add arrows -->
                <div class="outer-wrapper">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            
            </div>
            <!-- swiper : end -->

        </div>
    </div>
    <!-- news : end -->

    <!-- geography activities : begin -->
    <div class="geography-activities">
        
        <!-- title -->
        <div class="title">География деятельности</div>

        <!-- map and feedback form : begin -->
        <div class="map-and-feedbackform">
            
            <!-- left column : begin -->
            <div>
                
                <img src="/wp-content/themes/index/assets/images/main-page/geography-activities/map.png" alt="">

            </div>
            <!-- left column : end -->

            <!-- right column : begin -->
            <div>
                <?php echo do_shortcode('[contact-form-7 id="276" title="Подробная форма"]'); ?>

                

            </div>
            <!-- right column : end -->

        </div>
        <!-- map and feedback form : end -->

    </div>
    <!-- geography activities : end -->

</div>
<!-- CONTENT PAGE : end -->

<?php get_footer(); ?>
