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
 * Template Name: Шаблон выставки
 * @package index
 */
get_header(); ?>
    <!-- CONTENT PAGE : begin -->
    <div id="content-page">
        <?php the_content(); ?>
        <!-- news : begin -->
        <div class="top">
            <br>
            <h1><?php the_title(); ?></h1>
            <?php $loop = new WP_Query( array( 'post_type' => 'post', 'category_name' =>'exhibition', 'posts_per_page' => -1 ) ); ?>
            <?php while ( $loop->have_posts() ) : $loop->the_post();
$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), "Full");
 ?>
            <div class="text-block vistavki-margin">
                <p class="exhibition-title"><b><?php the_title(); ?></b></p>
                <?php the_excerpt();?>
                <br>
                <br>
                <a href="<?php the_permalink(); ?>" class="btn">Подробнее</a>
            </div>
            <div class="img-block"><a href="<?echo get_permalink();?>"><img src="<?=$imgsrc[0]?>" alt="<?the_title();?>" class="selected"></a></div>
            <?php endwhile; wp_reset_query(); ?>
            <!-- btn -->
        </div>
    </div>
    <!-- CONTENT PAGE : end -->
    <?php get_footer(); ?>
