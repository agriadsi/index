<?php
/**
 * index functions and definitions.
 *
 * @link https://codex.wordpress.org/Functions_File_Explained
 *
 * @package index
 */

if ( ! function_exists( 'index_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function index_setup() {
	add_filter('single_template', create_function('$t', 'foreach( (array) get_the_category() as $cat ) { if ( file_exists(TEMPLATEPATH . "/single-{$cat->term_id}.php") ) return TEMPLATEPATH . "/single-{$cat->term_id}.php"; } return $t;' ));

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on index, use a find and replace
	 * to change 'index' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'index', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'index' ),
		'services' => esc_html__( 'Услуги', 'index' ),
		'produce' => esc_html__( 'Изготовление', 'index' ),
		'product' => esc_html__( 'Товыры', 'index' ),
        'production' => esc_html__( 'Производители', 'index' ),
        'about' => esc_html__( 'О компании', 'index' ),
        'allservices' => esc_html__( 'Все услуги', 'index' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'index_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // index_setup
add_action( 'after_setup_theme', 'index_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function index_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'index_content_width', 640 );
}
add_action( 'after_setup_theme', 'index_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function index_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'index' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'index_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function index_scripts() {
	wp_enqueue_style( 'index-style', get_stylesheet_uri() );

	wp_enqueue_script( 'index-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'index-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'index_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Настройка показа превью новостей
 */
function new_excerpt_length($length) {
 return 21;
}
add_filter('excerpt_length', 'new_excerpt_length');

function new_excerpt_more($more) {
return '...';

}
add_filter('excerpt_more', 'new_excerpt_more');

/**
 * Contact form 7 insert shortcodes inside forms function
 */

add_filter( 'wpcf7_form_elements', 'mycustom_wpcf7_form_elements' );

function mycustom_wpcf7_form_elements( $form ) {
	$form = do_shortcode( $form );

	return $form;
}

/**
 * Yandex map
 */

add_shortcode( 'ya-map-cp', 'yam_render' );
function yam_render($atts){
//обработчик параметров шорткода
extract( shortcode_atts( array(
        'lng' => '',		// координаты
		'lat' => '',
		'h' => '',
        'ymapsml_url' => plugin_dir_url(__FILE__).'examples/example_yandex_maps_api21.xml', // xml YMapsML
		'map_width_px' => '',
		'map_height_px' => '240',
		'map_center' => '[55.76, 37.64]',
		'map_scale' => '12',
		'map_type' => 'yandex#map',
		'div_id' => 'map',
    ), $atts ) );
		
	ob_start();  
	?>
		<script type="text/javascript">
			var cpMap,
			myPlacemark;
			// Дождёмся загрузки API и готовности DOM.
			ymaps.ready(init);
			function init () {
				// Создание экземпляра карты и его привязка к контейнеру с
				// заданным id ("map").
				cpMap = new ymaps.Map('<?php echo $div_id ?>', {
					// При инициализации карты обязательно нужно указать
					// её центр и коэффициент масштабирования.
					center: [<?php echo types_render_field( "lans", array( ) ); ?>], // Москва
					zoom: <?php echo $map_scale ?>,
					//type: <?php echo $map_type ?>,
				});

				myPlacemark = new ymaps.Placemark([<?php echo types_render_field( "lans", array( ) ); ?>], { content: '<?php echo types_render_field( "citys", array( ) ); ?>', balloonContent: 'Ремонт Шпинделей' });
				
				

				//Добавляем удобство, которое при клике по карте скрывает балуны
				cpMap.events.add('click', function () {
					cpMap.balloon.close();
				});
				cpMap.geoObjects.add(myPlacemark);
				
				<?php 
				//Если есть xml, то загружаем его	
				if(isset($ymapsml_url)): ?>
					ymaps.geoXml.load('<?php echo $ymapsml_url; ?>').then(onGeoXmlLoad);
				<?php endif;?>
			}
			
			//Функция обработки данных XML в объекты на карте
			/*function onGeoXmlLoad (res) {
				cpMap.geoObjects.add(res.geoObjects);
				if (res.mapState) {
					res.mapState.applyToMap(cpMap);
				}
			}*/
		</script>
		<div id="<?php echo $div_id ?>" <?php echo 'style="'.'width:'.$map_width_px.'px;'.'height:'.$map_height_px.'px;'.'"'; ?> class="cp-ya-map"></div>

	
	<?
	$object .= ob_get_contents();  
	ob_end_clean();
return $object;
	
}
// Register Script
function cp_add_ya_map_api() {
global $post;
wp_register_script('yandex-maps-api', '//api-maps.yandex.ru/2.1/?lang=ru_RU', false, '2.1', $in_footer=false );
	//Загружаем скрипт только если есть шорткод у поста	
	if( is_a( $post, 'WP_Post' ) && has_shortcode( $post->post_content, 'ya-map-cp') ) {
		wp_enqueue_script( 'yandex-maps-api' );
	}
}
// Hook into the 'wp_enqueue_scripts' action
add_action( 'wp_enqueue_scripts', 'cp_add_ya_map_api' );
function custom_excerpt_length( $length ) {
	return 20;
}
// /**
//  * Remove the slug from published post permalinks.
//  */
// function custom_remove_cpt_slug( $post_link, $post, $leavename ) {

//     if ( 'geo' != $post->post_type || 'publish' != $post->post_status ) {
//         return $post_link;
//     }

//     $post_link = str_replace( '/' . $post->post_type . '/', '/', $post_link );

//     return $post_link;
// }
// add_filter( 'post_type_link', 'custom_remove_cpt_slug', 10, 3 );