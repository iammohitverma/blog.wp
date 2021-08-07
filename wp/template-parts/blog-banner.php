<?php
/**
 * Manage Blog Banner for blog listing page and all single posts pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package TM-Clients
 */

?>
<!-- blog common banner start -->
<div class="em-blog-banner" style="background-image: url(<?php echo get_theme_mod( "blog_page_banner_image" )?>)">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="em-bb-content">
                    <h1 class="em-bb-title"><?php echo get_theme_mod( "blog_page_banner_title" )?></h1>
                    <p class="em-bb-desc"><?php echo get_theme_mod( "blog_page_banner_desc" )?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- blog common banner end -->