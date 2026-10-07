<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package index
 */

?><!DOCTYPE html>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
   <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <!-- disable select tel. and skype numbers -->
    <meta name="format-detection" content="telephone=no">
    <meta name="skype-toolbar" content="skype-toolbar-parser-compatible">

    <!-- FAVICONS -->
    <link rel="apple-touch-icon" sizes="57x57" href="/wp-content/themes/index/assets/images/favicons/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/wp-content/themes/index/assets/images/favicons/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/wp-content/themes/index/assets/images/favicons/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/wp-content/themes/index/assets/images/favicons/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/wp-content/themes/index/assets/images/favicons/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/wp-content/themes/index/assets/images/favicons/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/wp-content/themes/index/assets/images/favicons/apple-touch-icon-144x144.png">
<link rel="icon" type="image/png" href="/wp-content/themes/index/assets/images/favicons/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="/wp-content/themes/index/assets/images/favicons/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="/wp-content/themes/index/assets/images/favicons/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="/wp-content/themes/index/assets/images/favicons/manifest.json">
<link rel="shortcut icon" href="/wp-content/themes/index/assets/images/favicons/favicon.ico">
<meta name="apple-mobile-web-app-title" content="СЦПО">
<meta name="application-name" content="СЦПО">
<meta name="msapplication-TileColor" content="#2b5797">
<meta name="msapplication-TileImage" content="/wp-content/themes/index/assets/images/favicons/mstile-144x144.png">
<meta name="msapplication-config" content="/wp-content/themes/index/assets/images/favicons/browserconfig.xml">
<meta name="theme-color" content="#ffffff">
    <!-- CSS : begin -->
    <!-- fonts : begin -->
    <!-- Exo 2 -->
    <link href='http://fonts.googleapis.com/css?family=Exo+2:400,100,100italic,200,200italic,300,300italic,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&subset=latin,cyrillic' rel='stylesheet'>

    <!-- Open Sans -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <!-- fonts : end -->

    <!-- production -->
    <link rel="stylesheet" type="text/css" href="<?=get_stylesheet_directory_uri();?>/assets/fancybox/jquery.fancybox.css" />
    <link rel="stylesheet" href="/wp-content/themes/index/assets/css/build/production.css">
    <!-- CSS : end -->
<?php wp_head(); ?>

<script type="text/javascript" src="//api-maps.yandex.ru/2.1/?lang=ru_RU&amp;ver=2.1"></script>

</head>



<body <?php body_class(); ?> >

<!-- HEADER PAGE : begin -->
<header id="header-page">

    <!-- logotype -->
    <div class="logo">
        <a href="/"></a>
        
    </div>


    <!-- additional info -->
    <div class="add-info">
        <span>Сервисный центр<br>промышленного оборудования</span>
    </div>

    <!-- tel number and btn : begin -->
    <div class="tel-number-and-btn">
        
        <!-- tel -->
        <div class="tel"><?php echo get_theme_mod('phone');?></div>

        <!-- btn -->
     
<span style="margin-left:2px"><b>Работаем по всей России</b></span>
    </div>
    <!-- tel number and btn : end -->

</header>
<!-- HEADER PAGE : end -->

<!-- MAIN NAVIGATION : begin -->
<nav id="main-nav">
    
    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
	

</nav>
<!-- MAIN NAVIGATION : end -->


