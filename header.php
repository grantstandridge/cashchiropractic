<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php wp_title('|'); ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="Shortcut Icon" type="image/ico" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Montserrat:400,700' type='text/css'>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/style.min.css?v=2.0" type="text/css" />
    <?php /* Put any emergency styles manually into the blame.css stylesheet instead of the style.min.css one */ ?><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/blame.css?v=<?php echo rand(10000,99999); ?>" type="text/css" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<script>var b=document.documentElement;b.setAttribute('data-useragent',navigator.userAgent);b.setAttribute('data-platform',navigator.platform);b.className+=((!!('ontouchstart' in window)||!!(navigator.MaxTouchPoints > 0)||!!(navigator.msMaxTouchPoints > 0))?' touch':'');</script>
<div id="container">
    <header class="site-header bg-color-white">
        <div class="layout-wrap">
            <h1 class="logo">
                <a href="/" class="block">Cash Chiropractic</a>
            </h1>
            <a href="tel:19182727432" class="tel bold color-primary">918.272.7432</a>
        </div>
        <a href="javascript:void(0)" id="trigger-menu" class="site-nav-trigger color-primary">&#9776;</a><?php wp_nav_menu( array(
            'theme_location' => 'The Main Menu',
            'menu' => 'Site Navigation',
            'container' => 'nav',
            'container_id' => 'site-nav',
            'container_class' => 'site-nav bg-color-primary color-white',
            'menu_id' => 'site-nav-menu',
            'menu_class' => 'list-reset layout-wrap'
        ) ); ?>
    </header>