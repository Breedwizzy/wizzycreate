<?php

function wizzycreate_register_styles()
{
	$version = wp_get_theme()->get('Version');
	wp_enqueue_style('wizzycreat-style', get_template_directory_uri() . '/style.css', array('wizzycreat-bootstrap'), $version, 'all');
	wp_enqueue_style('wizzycreat-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), 'all');
	wp_enqueue_style('wizzycreat-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), 'all');


}

add_action('wp_enqueue_scripts', 'wizzycreate_register_styles');




function wizzycreate_register_scripts()
{

	wp_enqueue_script('wizzycreate-jquery', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), '3.4.1', true);
	wp_enqueue_script('wizzycreate-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), '3.4.1', true);
	wp_enqueue_script('wizzycreate-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), '3.4.1', true);
	wp_enqueue_script('wizzycreate-main', get_template_directory_uri() . "/assets/js/main.js", array(), '1.0', true);


}

add_action('wp_enqueue_scripts', 'wizzycreate_register_scripts');



?>