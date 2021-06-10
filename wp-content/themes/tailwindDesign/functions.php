<?php

//  GLOBAL VAIRABLE 
if (!isset($GLOBALS['s_logo_path']))            {$GLOBALS['s_logo_path']            = 'none';}          // theme folder relative path, such as img/logo.svg .
if (!isset($GLOBALS['s_logo_width']))           {$GLOBALS['s_logo_width']           = '200';}           // any number, use in Custom Logo
if (!isset($GLOBALS['s_logo_height']))          {$GLOBALS['s_logo_height']          = '100';}           // any number, use in Custom Logo
if (!isset($GLOBALS['s_thumb_width']))          {$GLOBALS['s_thumb_width']          = '360';}           // any number
if (!isset($GLOBALS['s_thumb_height']))         {$GLOBALS['s_thumb_height']         = '189';}           // any number
if (!isset($GLOBALS['s_thumb_crop']))           {$GLOBALS['s_thumb_crop']           = true;}            // true, false

//  THEME SETUP 
if (!function_exists('theme_setup')) {
    function theme_setup() {
        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');
        add_theme_support('custom-logo', array(
            'width'       => $GLOBALS['s_logo_width'],
            'height'      => $GLOBALS['s_logo_height'],
            'flex-width'  => true,
            'flex-height' => true,
        ));
        add_theme_support('post-thumbnails');
        set_post_thumbnail_size($GLOBALS['s_thumb_width'], $GLOBALS['s_thumb_height'], $GLOBALS['s_thumb_crop']);
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption'
        ));
        add_theme_support('align-wide');
        add_theme_support('menus');
        register_nav_menus(
			array(
				'menu-w' => __( 'Primary-w', 'theme' ),
				'menu-m' => __( 'Primary-m', 'theme' ),
				'footer' => __( 'Footer Menu', 'theme' )
			)
		);
    }
}
add_action('after_setup_theme', 'theme_setup');

//  ENQUEUE CSS/JS SCRIPT 
function load_stylesheets() {
    wp_register_style('tailwind',get_template_directory_uri().'/assets/css/tailwind.min.css',array(),false,'all');
    wp_enqueue_style('tailwind');
    wp_register_style('styleCSS',get_template_directory_uri().'/assets/css/index.css',false,'all');
    wp_enqueue_style('styleCSS');
    wp_register_style('fontCSS',get_template_directory_uri().'https://rsms.me/inter/inter.css',false,'all');
    wp_enqueue_style('fontCSS');
}
add_action('wp_enqueue_scripts','load_stylesheets');

function load_scripts() {
    wp_register_script('customJS',get_template_directory_uri(). '/assets/js/index.js','',1,true);
    wp_enqueue_script('customJS');
}
add_action('wp_enqueue_scripts','load_scripts');

function currentYear(){
    return date('Y');
}

?>
