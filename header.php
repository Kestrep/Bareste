<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Design et lancement : Alexandre Petot -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Accueil</title> <!-- TODO: title & meta + réseaux sociaux -->

    <?php wp_head(); ?>
</head>
<body>

<header class="nav">
    <div class="logo">
        <a href="<?php get_home_url(); ?>">
            <img src="<?= get_template_directory_uri() . '/'?>images/logo.png" alt="Logo"><!-- TODO: logo dans personnalisation + petit logo dans onglets -->
        </a>
    </div>
    <div class="burger" data-target="menu-principal">
        <div class="line-1"></div>
        <div class="line-2"></div>
        <div class="line-3"></div>
    </div>
    <!-- 
    <ul id="burger-target" class="nav-list">
        <li class="nav-item active"><a href="#">Home</a></li>
        <li class="nav-item"><a href="#">About</a></li>
        <li class="nav-item"><a href="#">Contact</a></li>
    </ul>
    -->
    <?php wp_nav_menu( 'primary_menu' ); ?>
</header>
<?php // var_dump($_SERVER['PHP_SELF']); ?>
<?php // var_dump($_POST['name']); ?>
<div class="header-divider"></div>