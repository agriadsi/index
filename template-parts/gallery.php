<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package index
 */

?>
<div id="content-page">
<div class="top">
   <p class="h2">Фотографии ремонта</p>

<div class="grid">
			<?php $loop = new WP_Query( array( 'post_type' => 'slide', 'posts_per_page' => 12 ) ); ?>
			<?php while ( $loop->have_posts() ) : $loop->the_post();
			$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), "thumbnail");
			$imgsrcfull = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), "Full");
			?>
			<div class="item">
				<a href="<?=$imgsrcfull[0]?>" data-lightbox="mygallery" data-title="<?the_title();?>"><img src="<?=$imgsrc[0]?>"  alt="<?the_title();?>" title="<?the_title();?>"></a>
			</div>	
		<?php endwhile; wp_reset_query(); ?> 
		<!-- btn -->

	    </div>
	    <br>

	     <div class="default-btn center-btn"><a href="/fotogalereya.html">Посмотреть все фото</div>
	     </div></a>

	    


	      </div>