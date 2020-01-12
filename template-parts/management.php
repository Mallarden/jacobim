<?php 
/*
* Template Name: Management
*/
get_header(); ?>
<div id="primary" class="content">
<div class="hero-image-management"><h1 class="test123">BIM-Management</h1></div>
    <?
    while ( have_posts() ) : the_post(); ?> 
        <div class="content-wrapper">
                <?php the_content(); ?> 
        </div>
    <?php
    endwhile;
    wp_reset_query(); 
    ?>
</div><!-- #primary -->

<?php get_footer();