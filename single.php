<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package index
 */

get_header(); ?>

<!-- CONTENT PAGE : begin -->
<div id="content-page">
    <!-- services : begin -->
    <div class="services">
<?php get_sidebar(); ?>
        <h1><?the_title();?></h1>
		<?the_content();?>
	

</div>
</div>
<?php get_footer(); ?>
