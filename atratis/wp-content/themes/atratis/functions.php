<?php

function my_custom_fonts()
{

	wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap');
}

add_action('wp_enqueue_scripts', 'my_custom_fonts');

function atratis_setup()
{

	add_theme_support('title-tag');


	add_theme_support('custom-logo');

	load_theme_textdomain('wp-blank', get_template_directory() . '/languages');


	register_nav_menus(
		array(
			'top' => esc_html__('Top Menu', 'wp-blank'),
		)
	);
}
add_action('after_setup_theme', 'atratis_setup');


function atratis_enqueue_styles()
{

	wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css', array(), '5.3.2', 'all'); // Exemplo de inclusão do Bootstrap via CDN
	wp_enqueue_style('atratis-style', get_template_directory_uri() . '/css/style.css', array('bootstrap'), '1.0', 'all');
	wp_enqueue_script('atratis-script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0', true);
}


add_action('wp_enqueue_scripts', 'atratis_enqueue_styles');
add_action('wp_enqueue_scripts', 'atratis_enqueue_scripts');


function atratis_enqueue_scripts()
{
	wp_enqueue_script('atratis-script', get_template_directory_uri() . '/js/script.js', array(), '1.0', true);
}


function incluir_jquery() {
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.6.4.min.js', array(), null, true);
    wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'incluir_jquery');



add_action('wp_enqueue_scripts', 'incluir_jquery');

add_action('wp_enqueue_scripts', 'atratis_enqueue_scripts');
function atratis_enqueue_styles_and_scripts()
{
	wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/lib/owlCarousel/dist/assets/owl.carousel.min.css', array(), '2.3.4');
	wp_enqueue_style('owl-theme-default', get_template_directory_uri() . '/lib/owlCarousel/dist/assets/owl.theme.default.min.css', array(), '2.3.4');

	wp_enqueue_script('jquery', get_template_directory_uri() . '/jquery.min.js', array(), '3.6.0', true);

	wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/lib/owlCarousel/dist/owl.carousel.min.js', array('jquery'), '2.3.4', true);
}

add_action('wp_enqueue_scripts', 'atratis_enqueue_styles_and_scripts');
