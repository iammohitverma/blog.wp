<?php
/**
 * The template for displaying front page
 *
 * (Home Page of Website)
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package TM-Clients-theme
 */

get_header();
?>

<div class="container-fluid" id="page-<?php echo get_the_title();?>">
	<div class="container">
        <?php echo the_content(); ?>
    </div>
</div>
<?php get_footer();?>

