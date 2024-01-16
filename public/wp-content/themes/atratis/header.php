<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <?php wp_head(); ?>

</head>

<body>
    <header>
        <div class="buttonMainMenu">
            <button class="menu-toggle" onclick="toggleMenu()">☰</button>
        </div>

        <nav class="navbar border-body mainMenu">
            <div class="logoMainMenu">
                <?php
                $logo = get_field('logo');
                if ($logo) {
                    echo '<img src="' . esc_url($logo['url']) . '" alt="' . esc_attr($logo['alt']) . '">';
                }
                ?>
            </div>
            <div class="menuMainMenu">
                <?php wp_nav_menu() ?>
            </div>
            <div class="buttonMainMenu">
                <button class="btn button" type="button">Fale conosco</button>
            </div>
        </nav>
    </header>