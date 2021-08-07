<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TM-Clients
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <header class="container-fluid px-0">
            <div class="container">

                <nav class="navbar navbar-expand-lg tm-menu">
                    <div class="container-fluid px-0">
                        
                        <a href="<?php echo get_home_url() ?>">
                            <?php 
                                $custom_logo_id = get_theme_mod( 'custom_logo' );
                                $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
                                echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="Site Logo" class="logo tm-logoBrand">';
                            ?>
                        </a>
                        
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                         <div class="collapse navbar-collapse w-100 justify-content-lg-end" id="navbarSupportedContent">
                            <?php
                                wp_nav_menu(
                                    array(
                                        'theme_location'   =>     'header',
                                        'menu'             =>     'header-menu',
                                        'menu_class'       =>     'navbar-nav',
                                        'menu_id'          =>     'primary-menu',
                                        'container_class'  =>     'menu-inner',
                                    )
                                )
                            ?>
                        </div>
                    </div>
                </nav>

            </div>
        </header>