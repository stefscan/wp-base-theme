<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Note : La balise title est généré par le 
    support de title-tag. Voir functions.php -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
    <?php wp_body_open(); ?>

    <header>
        <h1><?php bloginfo('name'); ?></h1>
        <p class="header-slogan"><?php bloginfo('description') ?></p>
    </header>

    <main class="container">