<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viweport" content="width=device-width, initial-scale=1">
    <link rel="pingback" href="<?php bloginfo('pingback_url') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page">

    <header id="masthead" class="site-header" role="banner">
        <div class="container">
            <div class="logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo get_Stylesheet_directory_uri(); ?>/img/logo.svg">
                </a>
            </div>  
            <nav id="site-navigation" class="main-navigation" role="navigation">
                <?php wp_nav_menu(array('theme_location' => 'menu_principal')); ?>
            </nav>  
            
            <div class="clear"></div>

        </div>
    </header>
    
    <div id="contenido" class="container">