<?php

function rebro_theme_support()
{
    // add_theme_support("title-tag");
    add_theme_support("custom-logo");
}

add_action("after_setup_theme", "rebro_theme_support");

function rebro_register_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('rebro-boostrap-icons', "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css", array(), '1.0', 'all');
    wp_enqueue_style('rebro-bootstrap-style', get_template_directory_uri() . "/bootstrap.min.css", array(), '1.0', 'all');
    wp_enqueue_style('rebro-fontawsome-style', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css", array(), '1.0', 'all');
    wp_enqueue_style('rebro-aos-style', "https://unpkg.com/aos@2.3.1/dist/aos.css", array(), '1.0', 'all');
    wp_enqueue_style('rebro-style', get_template_directory_uri() . "/style.css", array("rebro-bootstrap-style"), $version, 'all');
}

add_action('wp_enqueue_scripts', 'rebro_register_styles');


function rebro_register_scripts()
{
    if (is_page(array('kontakt'))) {
        wp_enqueue_script('rebro-kontakt-init',  get_template_directory_uri() . "/kontakt.js", array(), '1.0', true);
    }
    wp_enqueue_script('rebro-jq-script', "https://code.jquery.com/jquery-3.5.1.min.js", array(), '3.5.1', true);
    wp_enqueue_script('rebro-jqcColor-script', "https://cdnjs.cloudflare.com/ajax/libs/jquery-color/2.1.2/jquery.color.min.js", array(), '2.1.2', true);
    wp_enqueue_script('rebro-popper-script', "https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js", array(), '1.0', true);
    wp_enqueue_script('rebro-bootstrap-script',  get_template_directory_uri() . "/bootstrap.min.js", array(), '1.0', true);
    wp_enqueue_script('rebro-aos-script', "https://unpkg.com/aos@2.3.1/dist/aos.js", array(), '1.0', true);

    wp_enqueue_script('vanilla-tilt', get_template_directory_uri() . "/vanilla-tilt.js", array(), '1.0', true);
    wp_enqueue_script('rebro-main-script', get_template_directory_uri() . "/rebro.js", array(), '1.0', true);
    $translation_array = array('templateUrl' => get_template());
    wp_localize_script('rebro-main-script', 'object_name', $translation_array);
}

add_action('wp_enqueue_scripts', 'rebro_register_scripts');
