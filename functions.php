<?php

    // Ajouter des "supports" de thème
    function basetheme_setup(){

        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );

    }
    add_action('after_setup_theme','basetheme_setup');

    // Placer dans la file les fichiers à charger
    function basetheme_enqueue(){

        wp_enqueue_style("maincss", get_template_directory_uri() . '/styles/main.css' );

    }
    add_action('wp_enqueue_scripts','basetheme_enqueue');



?>