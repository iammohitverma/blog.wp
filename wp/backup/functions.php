<?php

if ( ! defined( '_JN_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_JN_VERSION', '1.0.0' );
}

/**
 * Enqueue scripts and styles.
 */

function TM_Clients_scripts() {
	wp_enqueue_style( 'TM-Clients-style', get_stylesheet_uri(), array(), _JN_VERSION );
    wp_enqueue_style( 'TM-Clients-bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap/bootstrap.min.css', false, _JN_VERSION,'all');
    wp_enqueue_style( 'TM-Clients-fontawesome-style', get_template_directory_uri() . '/assets/css/fontawesome/css/all.min.css', false, _JN_VERSION,'all');
    
    // owl and slick both are linked use one of them at once 
    wp_enqueue_style( 'TM-Clients-owl-style', get_template_directory_uri() . '/assets/css/owl/owl-carousel-v2..3.4.min.css', false, _JN_VERSION,'all');
    wp_enqueue_style( 'TM-Clients-theme-style', get_template_directory_uri() . '/assets/css/theme-style.css', false, _JN_VERSION,'all');

    //Fonts
    wp_enqueue_style( 'lato-fonts', get_template_directory_uri() . '/assets/fonts/lato/stylesheet.css', false, 'all');

    //JQuery and Bootstrap Js
	wp_enqueue_script( 'TM-Clients-jquery-script', get_template_directory_uri() . '/assets/js/jquery/jquery-3.6.0.min.js', array(), _JN_VERSION, true );
	wp_enqueue_script( 'TM-Clients-bootstrap-script', get_template_directory_uri() . '/assets/js/bootstrap/bootstrap.bundle.min.js', array(), _JN_VERSION, true );
    
    // owl and slick both are linked use one of them at once  
	wp_enqueue_script( 'TM-Clients-owl-script', get_template_directory_uri() . '/assets/js/owl/owl-carousel-v2.3.4.min.js', array(), _JN_VERSION, true );
	wp_enqueue_script( 'TM-Clients-theme-script', get_template_directory_uri() . '/assets/js/function.js', array(), _JN_VERSION, true );
    

//	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
//		wp_enqueue_script( 'comment-reply' );
//	}
}
add_action( 'wp_enqueue_scripts', 'TM_Clients_scripts' );


/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';


// Logo support
$defaults = array(
    'height'               => 100,
    'width'                => 400,
    'flex-height'          => true,
    'flex-width'           => true,
    'header-text'          => array( 'site-title', 'site-description' ),
    'unlink-homepage-logo' => false, 
);

add_theme_support( 'custom-logo', $defaults );



// Register Menu's
function register_TM_menu() {
   register_nav_menu('header-menu',__( 'header' ));
   register_nav_menu('footer-menu',__( 'footer' ));
}

add_action( 'init' , 'register_TM_menu' );



// add class in li
add_filter ( 'nav_menu_css_class', 'add_class_to_menu_list', 10, 4 );

function add_class_to_menu_list ( $classes, $item, $args, $depth ){
    if ($args->theme_location == 'header') { /**** according to theme location *****/
      $classes[] = 'nav-item'; 
    }
    return $classes;
}



// add class in anchor
add_filter( 'nav_menu_link_attributes', 'add_class_to_list_anchor', 10, 4 );

function add_class_to_list_anchor($atts, $item, $args, $depth) {
    if ($args->theme_location == 'header') { /**** according to theme location *****/
        $atts['class'] = "nav-link";
    }
  return $atts;
}


// added by Mohit 06-08-2021
// added by Mohit 06-08-2021
// added by Mohit 06-08-2021

// excerpt length function
function dynamicwp_custom_excerpt_length( $length ) {
    return 63;
}
add_filter( 'excerpt_length', 'dynamicwp_custom_excerpt_length', 999 );



// Changing excerpt more

function new_excerpt_more($more) {
    global $post;
    remove_filter('excerpt_more', 'new_excerpt_more'); 
    return ' <a class="read_more" href="'. get_permalink($post->ID) . '">' . '...' . '</a>';
  }
  add_filter('excerpt_more','new_excerpt_more',11);



  /*
 * Set post views count using post meta
 */
function setPostViews($postID) {
    $countKey = 'post_views_count';
    $count = get_post_meta($postID, $countKey, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $countKey);
        add_post_meta($postID, $countKey, '0');
    }else{
        $count++;
        update_post_meta($postID, $countKey, $count);
    }
}


// added by Mohit 06-08-2021
// added by Mohit 06-08-2021
// added by Mohit 06-08-2021



// sidebar registeration
register_sidebar(

    array(

        'name' => _x('Copyright Widget', 'backend', 'cargopress-pt'),

        'id' => 'copyright-widgets',

        'description' => _x('Copyright Area', 'backend', 'cargopress-pt'),

        'before_widget' => '<div class="widget  %2$s">',

        'after_widget' => '</div>',

    )

);