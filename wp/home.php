<?php
/**
 * The template for displaying blog page 
 *
 * Blog Listing Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package TM-Clients
 */

 get_header(); ?>

<?php echo get_template_part( 'template-parts/blog', "banner" );  ?>


<div class="em-blog-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>  
                    
                    <!-- blog post start -->
                    <article>
                        <div class="em-blog-post">
                            <div class="em-post-feature">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="em-post-thumbnail">
                                        <img src="<?php the_post_thumbnail_url('custom-size2');?>" class="img-fluid" alt="">
                                    </div>
                                </a>
                            </div>

                            <div class="em-post-content">
                                <h2 class="post-title">
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                                </h2>

                                <div class="em-post-description">
                                    <?php the_excerpt();?>
                                </div>

                                <div class="read-more-wrap">
                                    <a href="<?php the_permalink(); ?>" class="read-more">Read More <img src="https://esomasteryguides.tmdemo.in/wp-content/uploads/2021/08/chevronblue.png" alt="read-more-arrow"></a>
                                </div>
                            </div>

                        </div>
                    </article>
                    <!-- blog post end -->

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        <!-- for pagination -->
        <div class="row">
			<div class="col-12">
				<div class="em-pagination">
					<?php the_posts_pagination(array(
						'mid-size' => 3,
						'prev_text' => __('« previous'),
						'next_text' => __('next »'),
					)); ?>
				</div>
			</div>
		</div>
    </div>
</div>


<?php get_footer(); ?>
