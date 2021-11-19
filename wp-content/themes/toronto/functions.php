<?php
    //Agregar scripts
    function theme_scripts() {
        wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css');
        wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
    }
    add_action('wp_enqueue_scripts', 'theme_scripts');

    //Registrar menú
    register_nav_menus(array(
        'menu_principal' => __('Menu Principal', 'CursoWP Toronto theme')
    ));

    //Eliminar la barra de administración de WP superior en el front
    add_filter('show_admin_bar', '__return_false');
    

?>