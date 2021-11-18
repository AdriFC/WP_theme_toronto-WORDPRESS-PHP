<?php

    function theme_scripts() {
        wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css');
        wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
    }

    add_action('wp_enqueue_scripts', 'theme_scripts');

    register_nav_menus(array(
        'menu_principal' => __('Menu Principal', 'CursoWP Toronto theme')
    ));


    
    //Eliminar la barra de administración de WP superior en el front
    function remove_admin_login_header() {
        remove_action('wp_head', '_admin_bar_bump_cb');
    }

    add_action('get_header', 'remove_admin_login_header');

?>