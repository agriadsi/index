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
 * @package index
 */
get_header(); ?>
    <!-- CONTENT PAGE : begin -->
    <div id="content-page">
        <!-- news : begin -->
        <div class="top">
            <br>
            <h1>Статьи</h1>
            <?php while ( have_posts() ) : the_post(); 
$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), "medium");
 ?>
            <div class="text-block vistavki-margin">
                <p class="exhibition-title"><b><?php the_title(); ?></b></p>
                <?php the_excerpt();?>
                <br>
                <br>
                <a href="<?php the_permalink(); ?>" class="btn">Подробнее</a>
            </div>
            <div class="img-block"><a href="<?echo get_permalink();?>"><img src="<?=$imgsrc[0]?>" alt="<?the_title();?>" class="selected"></a></div>
            <?php endwhile; ?>
            <!-- btn -->
        </div>
    </div>
    <!-- CONTENT PAGE : end -->
    <?php get_footer(); ?>
