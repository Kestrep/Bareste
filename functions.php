<?php
$VERSION = '0.0.1';

function setup() {
    
    # Config
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );

    # Menu
    register_nav_menus( array(
        'menu-1' => esc_html__( 'Header', 'Principal' ), // Menu principal
    ) );
}
add_action( 'after_setup_theme', 'setup' );

/**
 * Activation des excerpts pour les pages
 */
add_post_type_support( 'page', 'excerpt');


/**
 * Chargement des scripts
 */
function scripts() {
    global $VERSION;

    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/style.css' );
    //wp_enqueue_style( 'style-bootstrap-grid', get_template_directory_uri() . '/assets/css/bootstrap-grid.css' );
    wp_enqueue_script( 'script-js' , get_template_directory_uri() . '/assets/main.js', array(), $VERSION, true);
}
add_action( 'wp_enqueue_scripts', 'scripts' );

/**
 * Customize
 */
add_action('customize_register', function (WP_Customize_Manager $manager) {
    $manager->add_section('contact', [
        'title' => 'Information de contact',
    ]);
    $manager->add_setting('firstname', [
        'default' => 'Prénom'
    ]);
    $manager->add_control('firstname', [
        'section' => 'contact',
        'setting' => 'firstname',
        'label' => 'Prénom',
    ]);
    
    $manager->add_setting('lastname', [
        'default' => 'Nom'
    ]);
    $manager->add_control('lastname', [
        'section' => 'contact',
        'setting' => 'lastname',
        'label' => 'Nom',
    ]);

    $manager->add_setting('adress', [
        'default' => 'Numéro et rue'
    ]);
    $manager->add_control('adress', [
        'section' => 'contact',
        'setting' => 'adress',
        'label' => 'Numéro et rue',
    ]);

    $manager->add_setting('postcode', [
        'default' => 'Code Postal et Ville'
    ]);
    $manager->add_control('postcode', [
        'section' => 'contact',
        'setting' => 'postcode',
        'label' => 'Code Postal et Ville',
    ]);

    $manager->add_setting('mail', [
        'default' => 'Adresse mail'
    ]);
    $manager->add_control('mail', [
        'section' => 'contact',
        'setting' => 'mail',
        'label' => 'Adresse mail',
    ]);

    $manager->add_setting('phone', [
        'default' => 'Téléphone'
    ]);
    $manager->add_control('phone', [
        'section' => 'contact',
        'setting' => 'phone',
        'label' => 'Téléphone',
    ]);
});

