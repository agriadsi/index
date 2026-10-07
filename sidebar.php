<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package index
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

 <!-- left column (navigation block) : begin -->
        <aside>
            
            <!-- list -->
            <?php    /**
                * Displays a navigation menu
                * @param array $args Arguments
                */
               
                if ( is_page( 'produktsiya' ) ) {
                    wp_nav_menu( array( 
                        'theme_location' => 'product',
                    'menu' => 'product',
                    'container' => 'div',
                    'container_class' => 'menu-{}-container',
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
                    ) );
                } 
                else if ( is_page( 'shpindel' ) ) {
                    wp_nav_menu( array( 
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
                    ) );
                } 
                else if ( is_page( 'vysokoskorostnye-podshipniki' ) ) {
                    wp_nav_menu( array( 
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
                    ) );
                } 

                else {
                    wp_nav_menu( array( 
                        'theme_location' => 'allservices',
                    'menu' => 'allservices',
                    'container' => 'div',
                    'container_class' => '',
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
                ) );
                }
                ?>

          
    <!-- banner -->

<img src="<?php echo get_theme_mod('banner'); ?>" style="float: left;">
           


        </aside>
        <!-- left column (navigation block) : end -->
