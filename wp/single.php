<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package TM-Clients-theme
 **/

get_header();
?>


<?php
	$postType = get_post_type();
	if($postType == "post"){
		echo get_template_part( 'template-parts/blog', "banner" );
	}
?>


<div id="single-<?php echo get_post_type();?>">
	<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', get_post_type() );
		endwhile; // End of the loop.
	?>
</div>
<?php get_footer();?>

