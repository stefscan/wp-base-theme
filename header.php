<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Note : La balise title est généré par le 
    support de  thème "title-tag". Voir functions.php -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
    <?php wp_body_open(); ?>
<!-- TASK : Ajouter  le "custom-logo" en faisant le nav -->
    <header style="
    background-image: url(<?php header_image()?>);
    background-size: cover;
    background-position: center;
    ">
        <div class="container">
            <h1><a href="<?php echo esc_url( home_url('/') ); ?>">
                <?php bloginfo('name'); ?></a></h1>
            <p class="header-slogan"><?php bloginfo('description') ?></p>
        </div>
       
    </header>

    <main class="container">