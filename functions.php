<?php

    // Ajouter des "supports" de thème
    function basetheme_setup(){

        // Générer automatiquement la balise "title" pour chaque page
        add_theme_support( 'title-tag' );

        // Permettre l'ajout d'un image de premier plan pour les articles et pages
        add_theme_support( 'post-thumbnails' );

        // Support logo
        add_theme_support('custom-logo', array(
            'width' => '100',
            "height" => '100'
        ));

        // Support Header
        add_theme_support('custom-header', array(
            'default-image' => get_template_directory_uri() . "/images/default.jpg"
        ));

        // À tester ...
        add_theme_support( 'html5', array( 'search-form', 'navigation-widgets' ) );

    }
    add_action('after_setup_theme','basetheme_setup');

    // Placer dans la file les fichiers à charger
    function basetheme_enqueue(){

        wp_enqueue_style("maincss", get_template_directory_uri() . '/styles/main.css' );

    }
    add_action('wp_enqueue_scripts','basetheme_enqueue');



?>