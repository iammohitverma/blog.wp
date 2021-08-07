<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TM-Clients
 */

?>

<footer class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="inner">
                    <?php
                        wp_nav_menu(
                            array(
                                'theme_location'   =>     'footer',
                                'menu'             =>     'footer-menu',
                                'menu_class'       =>     'tm-footer-menu',
                            )
                        )
                    ?>
                </div>
                
                <div class="inner copyright_line">
                    <?php
                        if (is_active_sidebar('copyright-widgets')) {
                            dynamic_sidebar('copyright-widgets');
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</footer>
	
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
