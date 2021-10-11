<?php get_header(); 


    while(have_posts()) {
        the_post(); ?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php the_content(); ?>
        <hr>
    <?php 
    }

    get_footer();
?>


<!-- 
    Wordpress function
    'have_posts' determines whether current WordPress query has posts to loop over.
    'the_post' checks whether the loop has started and then sets the current post by moving, each time, to the next post in the queue
 -->