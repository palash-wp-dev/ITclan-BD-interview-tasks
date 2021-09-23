<?php 

/**
 * All the css and js files are linked here
 */
function joyous_enqueue_scripts(){
	wp_enqueue_style('stylesheet',get_stylesheet_uri());
	wp_enqueue_style('google-font sans','https://fonts.googleapis.com/css?family=Open+Sans:400,600,600i,700,700i,800|Poppins:300,300i,400,400i,500,500i,600,700,800,900');
	wp_enqueue_style('bootstrap',get_template_directory_uri().'/assets/css/bootstrap.min.css');
	wp_enqueue_style('icofont',get_template_directory_uri().'/assets/css/icofont.css');
	wp_enqueue_style('swiper',get_template_directory_uri().'/assets/css/swiper.min.css');
	wp_enqueue_style('slick',get_template_directory_uri().'/assets/css/slick.css');
	wp_enqueue_style('jquery-ui',get_template_directory_uri().'/assets/css/jquery-ui.min.css');
	wp_enqueue_style('easyzoom',get_template_directory_uri().'/assets/css/easyzoom.css');
	wp_enqueue_style('style',get_template_directory_uri().'/assets/css/style.css');
	wp_enqueue_style('responsive',get_template_directory_uri().'/assets/css/responsive.css');
	
	wp_enqueue_script('jquery',get_template_directory_uri().'/assets/js/jquery.min.js',['jquery'],true,true);
	wp_enqueue_script('bootstrap',get_template_directory_uri().'/assets/js/bootstrap.min.js',['jquery'],true,true);
	wp_enqueue_script('swiper',get_template_directory_uri().'/assets/js/swiper.min.js',['jquery'],true,true);
	wp_enqueue_script('slick',get_template_directory_uri().'/assets/js/slick.min.js',['jquery'],true,true);
	wp_enqueue_script('blazy',get_template_directory_uri().'/assets/js/blazy.min.js',['jquery'],true,true);
	wp_enqueue_script('slicknav',get_template_directory_uri().'/assets/js/jquery.slicknav.min.js',['jquery'],true,true);
	wp_enqueue_script('jquery-ui',get_template_directory_uri().'/assets/js/jquery-ui.min.js',['jquery'],true,true);
	wp_enqueue_script('easyzoom',get_template_directory_uri().'/assets/js/easyzoom.js',['jquery'],true,true);
	wp_enqueue_script('scripts',get_template_directory_uri().'/assets/js/scripts.js',['jquery'],true,true);		
}
add_action('wp_enqueue_scripts','joyous_enqueue_scripts');

/**
 * Theme options support
 */
function joyous_theme_support(){
	add_theme_support('title-tag');
	add_theme_support('menus');
	add_theme_support('widgets');
	add_theme_support('custom-header');
	add_theme_support('custom-background');
	add_theme_support('custom-logo');
	add_theme_support('post-thumbnails');
	add_theme_support('post-formats',array('gallery','video','audio'));
	add_theme_support('woocommerce');

	// menu register
	register_nav_menus(array(
		'headermenu'	=> 'Header Menu'
	));
}
add_action('after_setup_theme','joyous_theme_support');

/**
 * TGM linking
 */
require_once get_template_directory().'/inc/tgm/example.php';



// woocommerce functionality

remove_action('woocommerce_sidebar','woocommerce_get_sidebar',10);
remove_action('woocommerce_before_main_content','woocommerce_output_content_wrapper',10);
remove_action('woocommerce_after_main_content','woocommerce_output_content_wrapper_end',10);






?>