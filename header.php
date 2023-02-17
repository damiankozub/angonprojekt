<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/fa-all.min.css">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/main.css">

    <?php wp_head(); ?>
</head>
<body <?php body_class(isset($class) ? $class : ''); ?>>
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand text-light " href="<?php echo get_home_url(); ?>">
            <?php bloginfo('name'); ?>
        </a>
        <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarMain"
                aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php wp_nav_menu(array(
            'theme_location' => 'main_menu',
            'menu_id' => 'header_menu',
            'container' => 'div',
            'container_class' => 'navbar-collapse collapse',
            'container_id' => 'navbarMain',
            'menu_class' => 'navbar-nav mr-0',
            'fallback_cb' => '__return_false',
            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth' => 2,
            'walker' => new WP_bootstrap_4_walker_nav_menu()
        )); ?>
        <?php if (get_field('nav_btn_text', 10) && get_field('nav_btn_link', 10)): ?>
            <a href="<?php the_field('nav_btn_link', 10); ?>"
               class="link-btn link-btn-green"><?php the_field('nav_btn_text', 10); ?></a>
        <?php endif; ?>
    </div>
</nav>
