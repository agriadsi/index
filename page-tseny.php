<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package index
 */

get_header(); ?>

<!-- CONTENT PAGE : begin -->
<div id="content-page">
    <!-- services : begin -->
    <div class="services">



        <?php wp_reset_query(); ?>
            <!-- title -->
            <h1><?php the_title(); ?></h1>

            <?php the_content(); ?>
        <section>
             <?php echo do_shortcode('[contact-form-7 id="816" title="Заказ"]'); ?>
       </section>

<?php if(!is_page(array(15,17,19,21))) { ?>
            <!-- us recommend : begin -->
            <!--  <div class="us-recommend">
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
            </div> -->

            <!-- us recommend : end -->
<?php } ?>
            



 </div>
    <!-- services : end -->
</div>
     <?php
        get_template_part( 'template-parts/gallery');
        ?> 
<!-- CONTENT PAGE : end -->
<?php get_footer(); ?>
