<?php
/**
 * Theme Customizer
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package TM-Clients-theme
 */

function tm_clients_customize_register($wp_customize){
    // Blog Banner options start
    // Panels 
    $wp_customize->add_panel( 'blog_page_banner', array( 
        'title'            => __( 'Blog Page Banner', 'TM-Clients' ),
        'description'      => __( '' ), 
        'priority'         => 10,   
    ) );
        
    // Sections 
    $wp_customize->add_section('blog_page_banner_section', array(
        'title'    => __('Blog Banner', ' TM-Clients'),
        'description' => '',
        'priority' => 120,
        'panel' => 'blog_page_banner',
    ));   

    //  =============================
    //  Banner Image
    //  ============================= 
    $wp_customize->add_setting('blog_page_banner_image', array(
        'default'           => 'https://esomasteryguides.tmdemo.in/wp-content/uploads/2021/08/blog-banner.jpg',
        'capability'        => 'edit_theme_options',
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'blog_page_banner_image', array(
        'label'    => __('Blog Banner Image', 'TM-Clients'),
        'section'  => 'blog_page_banner_section',
        'settings' => 'blog_page_banner_image',
    )));


    //  =============================
    //  Banner Title             
    //  =============================
    $wp_customize->add_setting('blog_page_banner_title', array(
        'default'           => 'Get Exclusive ESO Tips',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
        'type'           => 'theme_mod',  
    ));

    $wp_customize->add_control( "blog_page_banner_title", array(
        'label'    => __('Blog Banner Title', 'TM-Clients'),
        'section'  => 'blog_page_banner_section',
        'settings' => 'blog_page_banner_title',
        'type' => 'textarea',        
    ));

    //  =============================
    //  Banner Description  
    //  =============================
    $wp_customize->add_setting('blog_page_banner_desc', array(
        'default'           => 'Learn how to master The Elder Scrolls Online with our exclusive tips and strategies.',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_attr',
        'type'           => 'theme_mod',  
    ));

    $wp_customize->add_control( "blog_page_banner_desc", array(
        'label'    => __('Blog Banner Description', 'TM-Clients'),
        'section'  => 'blog_page_banner_section',
        'settings' => 'blog_page_banner_desc',
        'type' => 'textarea',        
    ));
    // Blog Banner options end

}
add_action('customize_register', 'tm_clients_customize_register');