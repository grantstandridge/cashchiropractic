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
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/style.min.css?v=<?php echo rand(10000,99999); ?>" type="text/css" />
<?php /* Put any emergency styles manually into the blame.css stylesheet instead of the style.min.css one */ ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/blame.css?v=<?php echo rand(10000,99999); ?>" type="text/css" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<script>var b=document.documentElement;b.setAttribute('data-useragent',navigator.userAgent);b.setAttribute('data-platform',navigator.platform);b.className+=((!!('ontouchstart' in window)||!!('onmsgesturechange' in window))?' touch':'');</script>
<div id="container">