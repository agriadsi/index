<?php
/**
 * index Theme Customizer.
 *
 * @package index
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function index_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';


// add aditional settings
$wp_customize->add_section( 'user-set' , array(
    'title' => __( 'Настройки сайта', '_s' ),
    'priority' => 30,
    'description' => __( '', '_s' )
) );

    
$wp_customize->add_setting( 'phone' , array( 'default' => '' ));
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'phone', array(
    'label' => __( 'Телефон', '_s' ),
    'section' => 'user-set',
    'settings' => 'phone',
) ) );
$wp_customize->add_setting( 'address' , array( 'default' => '' ));
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'address', array(
    'label' => __( 'Адрес', '_s' ),
    'section' => 'user-set',
    'settings' => 'address',
) ) );

$wp_customize->add_setting( 'banner' , array( 'default' => '' ));
$wp_customize->add_control( new WP_Customize_Upload_Control( $wp_customize, 'banner', array(
'label' => 'Баннер',
'section' => 'user-set',
'settings' => 'banner',
) ) );

}


add_action( 'customize_register', 'index_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function index_customize_preview_js() {
	wp_enqueue_script( 'index_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'index_customize_preview_js' );
