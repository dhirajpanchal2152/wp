<?php
/*
**Theme Function
**@package coderblog
*/
function coderBlog_enqueue_script(){
    wp_enqueue_style('style-css',get_template_directory_uri().'/style.css',[],false,'all');
    wp_enqueue_style('bootstrap-css',get_template_directory_uri().'/assets/src/library/css/bootstrap.min.css',[],false,'all');
    wp_enqueue_style('nav-css',get_template_directory_uri().'/assets/src/library/css/style.css',[],false,'all');

    wp_enqueue_script('main-js',get_template_directory_uri().'/assets/main.js',[],false,true);
    wp_enqueue_script('boostrap-js',get_template_directory_uri().'/assets/src/library/js/bootstrap.min.js',[],false,true);


}
add_action('wp_enqueue_scripts','coderBlog_enqueue_script');
// custom-title.
function CoderBlog_title(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo',array(
		'header-text'          => array( 'site-title', 'site-description' ),
        'height'               => 100,
		'width'                => 400,
		'flex-height'          => true,
		'flex-width'           => true,
		'unlink-homepage-logo' => true, 
    )); 
}
// add_theme_support( 'custom-background',array(
//     'default-color' => '0000ff',
    
// ));
add_theme_support('post-thumbnails');
add_action('after_setup_theme','CoderBlog_title');

function coderblog_resister_menu(){
    register_nav_menus(array(
        'header-menu'=>esc_html__( 'Header Menu','coderBlog' ),
        'footer-menu'=>esc_html__( 'footer Menu','coderBlog' )
    ));
}
add_action('init','coderblog_resister_menu');
function add_additional_class_on_li($classes,$item,$args){
        if(isset($args->add_li_class)){
            $classes[]=$args->add_li_class;

        }
        return $classes;
}
add_filter('nav_menu_css_class','add_additional_class_on_li',   1,5);
?>