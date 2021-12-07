<?php get_header(); ?>

<div class="past-works-main">
    <?php
    $works_query = new WP_Query(
        array(
            'post_type' =>  'past_work',
            'orderby'   =>  'date',
            'order'     =>  'ASC'
        )
    );
    if ( $works_query -> have_posts() ) :
        while ( $works_query -> have_posts() ) :
            $works_query -> the_post();
            get_template_part('template-parts/content-works');
        endwhile;
    endif;
    ?>
</div>


<a class="home-button" href="<?php echo home_url(); ?>">HOME</a>

<?php
get_footer();
