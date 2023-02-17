<?php

//Add thumbnail, automatic feed links and title tag support
add_theme_support('post-thumbnails');


//Add menu support and register main menu
if (function_exists('register_nav_menus')) {
    register_nav_menus(
        array(
            'main_menu' => 'Main Menu',
            'footer_menu' => 'Footer Menu'
        )
    );
}

add_action('widgets_init', 'footer');
function footer()
{
    register_sidebar(array(
        'id' => 'footer',
        'name' => 'Stopka',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h6>',
        'after_title' => '</h6>',
    ));
}


function theme_url()
{
    echo esc_url(get_template_directory_uri());
}

function theme_img($file)
{
    echo esc_url(get_template_directory_uri()) . '/images/' . $file;
}

function get_theme_img($file)
{
    return esc_url(get_template_directory_uri()) . '/images/' . $file;
}

function acf_image($field, $size = null)
{
    $image = get_field($field);

    if (empty($image))
        $image = get_sub_field($field);

    if (!empty($image))
        if ($size)
            echo $image['sizes'][$size];
        else
            echo $image['url'];
}

function get_acf_image($field, $size = null)
{
    $image = get_field($field);
    if (empty($image))
        $image = get_sub_field($field);

    if (!empty($image))
        if ($size)
            return $image['sizes'][$size];
        else
            return $image['url'];
}

function acf_sub_image($field, $size = null)
{
    $image = get_sub_field($field);

    if (!empty($image))
        if ($size)
            echo $image['sizes'][$size];
        else
            echo $image['url'];
}



// Custom Navbar
require get_template_directory() . '/inc/custom-navbar.php';

function init_session()
{
    session_start();
}
add_action('init', 'init_session', 1);

