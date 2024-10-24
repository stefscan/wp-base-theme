<?php

    // Ajouter des "supports" de thème
    function basetheme_setup(){

        // Générer automatiquement la balise "title" pour chaque page
        add_theme_support( 'title-tag' );

        // Permettre l'ajout d'un image de premier plan pour les articles et les pages
        add_theme_support( 'post-thumbnails' );

        // Support de logo
        add_theme_support('custom-logo', array(
            'width' => '100',
            "height" => '100'
        ));

        // Support de Header
        add_theme_support('custom-header', array(
            'default-image' => get_template_directory_uri() . "/images/default.jpg"
        ));

        // À tester ...
        add_theme_support( 'html5', array( 'search-form', 'navigation-widgets' ) );

        // Déclarer un menu (À créer dans l'admin de Wordpress)
        register_nav_menus(array(
            'main-menu'=> __('Menu principal')
        ));

    }
    add_action('after_setup_theme','basetheme_setup');

    // Placer dans la file les fichiers à charger
    function basetheme_enqueue(){

        wp_enqueue_style("gridcss", get_template_directory_uri() . '/styles/grid.css' );

        // Le fichier css "mais.css" a une dépendance au fichier "grid.css"
        wp_enqueue_style("maincss", get_template_directory_uri() . '/styles/main.css', array('gridcss') );

    }
    add_action('wp_enqueue_scripts','basetheme_enqueue');



?>