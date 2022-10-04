<?php
/*******************************
 ****** Skytheme Functions *****
 *******************************/

// 01. Enqueue scripts and necessary files
// 02. Add Google Fonts


 //Theme Title
 add_theme_support('title-tag' );

/*========================================================================================
         01. Enqueue script filse in theme (css, js => jQuery and other files)
========================================================================================*/
 function themesky_files () {
   // Add CSS Files 
   wp_enqueue_style('Style', get_stylesheet_uri( ));
    wp_register_style('normalize', get_template_directory_uri( ).'/css/normalize.css', array(), '8.0.1', 'all');
    wp_enqueue_style('normalize');
    wp_register_style('bootstrap', get_template_directory_uri( ).'/css/bootstrap.min.css', array(),'5.2.1', 'all' );
    wp_enqueue_style('bootstrap');
    wp_register_style('custom', get_template_directory_uri( ).'/css/custom.css', array(),'1.0', 'all' );
    wp_enqueue_style('custom');
 }
   // Add js files
   wp_enqueue_script('jQuery',get_template_directory_uri( ).'/js/jquery-3.6.1.min.js', array(),'3.6.1', true );
   wp_enqueue_script('bootstrap.bundle.min',get_template_directory_uri( ).'/js/bootstrap.bundle.min.js', array(),'1.0', true );
   wp_enqueue_script('main',get_template_directory_uri( ).'/js/main.js', array(),'5.2.1', true );

 add_action('wp_enqueue_scripts', 'themesky_files' );

/*========================================================================================
                        02. Add Google Fonts in WP_theme.
=========================================================================================*/


function themesky_fonts () {
   wp_enqueue_style('google_fonts','https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap', false );
 }

add_action('wp_enqueue_scripts', 'themesky_fonts' );

/*==================================================================================================
                                       WP Theme Function 
====================================================================================================*/


/****************************************************************************************************
  01. Customize Header area => Upload logo / Customize Register
  02. Register a menu in WordPress
****************************************************************************************************/


// 01. Customize Header area => Upload logo / Customize Register
function skytheme_customize_register( $wp_customize ) {
   $wp_customize->add_section('skytheme_header_area', array(
      'title' =>__('Header Area', 'skytheme'),
      'description' =>'If You interested to update your header area you cand do it from here.'
   ));

   $wp_customize->add_setting('skytheme_logo', array(
      'default' =>get_bloginfo('template_directory').'/img/logo.png'
   ));
   $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'skytheme_logo', array(
      'label'=> 'Logo Upload',
      'description' =>'If You interested to update or change your logo from here.',
      'setting' => 'skytheme_logo',
      'section' => 'skytheme_header_area',
   )));
 }
 add_action( 'customize_register', 'skytheme_customize_register' );

 // 02. Register a menu in WordPress
  register_nav_menu('main_menu', __('Main Menu', 'skytheme') );

