<?php get_header(); ?>

<div class="past-works-main">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post();
            get_template_part('template-parts/content-works');
        endwhile;
        the_posts_navigation();
    else :
        echo "We do NOT have posts!";
    endif;
    ?>
</div>


<a class="home-button" href="<?php echo get_page_link(58); ?>">BACK</a>

<?php
get_footer();
