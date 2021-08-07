<?php
/**
 * The template for displaying single blog post
 *
 * Blog single Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package TM-Clients
 */
 get_header(); ?>



<div class="em-blog-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12">              
                    
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
                                <h2 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                                <div class="em-post-description">
                                    <?php the_content();?>
                                </div>
                            </div>


                        </div>
                    </article>
                    <!-- blog post end -->

            </div>

            <div class="col-lg-4 col-12"> 
                <div class="em-blog-sidebar">
                    <div class="em-blog-search">
                        <?php echo get_search_form();?>
                    </div>

                    <!-- em-popular-posts -->
                    <div class="em-popular-posts">

                        <h3 class="title">Popular Posts</h3>
                                    
                        <ul class="posts">

                            <?php
                                setPostViews(get_the_ID());
                                query_posts('meta_key=post_views_count&orderby=meta_value_num&order=DESC');                                
                                $i = 0;
                                if (have_posts()) : while (have_posts() && $i < 5) : the_post();
                                $i++;
                            ?>
                            <li>
                                <div class="thumbnail">
                                    <a href="<?php the_permalink(); ?>">
                                        <img src="<?php the_post_thumbnail_url();?>" alt="">
                                    </a>
                                </div>
                                <div class="title">
                                    <h4>
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_title();?>
                                        </a>
                                    </h4>
                                </div>
                            </li>

                            <?php
                                endwhile; endif;
                                wp_reset_query();
                            ?>

                        </ul>

                    </div>


                    <!-- em-recent-posts -->
                    <div class="em-recent-posts">

                        <h3 class="title">Recent Posts</h3>

                        <?php $query1 = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 5 ) ); ?>
                            
                            <?php if ( $query1->have_posts() ) : ?>

                                <?php while ( $query1->have_posts() ) : $query1->the_post(); ?>   
                                    
                                    <ul class="posts">
                                        <li>
                                            <div class="thumbnail">
                                                <a href="<?php the_permalink(); ?>">
                                                    <img src="<?php the_post_thumbnail_url();?>" alt="">
                                                </a>
                                            </div>
                                            <div class="title">
                                                <h4>
                                                    <a href="<?php the_permalink(); ?>">
                                                        <?php the_title();?>
                                                    </a>
                                                </h4>
                                            </div>
                                        </li>
                                    </ul>

                            <?php endwhile; ?>

                        <?php endif; ?>

                        <?php wp_reset_postdata(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>