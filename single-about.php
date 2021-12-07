<?php get_header(); ?>

<div class="about-pic-container">
    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/about-page-pic.jpg" alt="about-page-pic">
</div>

<div class="about-field">
    <?php $whatICanDo_object = get_field_object('what_i_can_do'); ?>
    <h2 class="about-field-title"><?php echo $whatICanDo_object['label']; ?></h2>
    <div class="about-field-content">
        <p><?php the_field('what_i_can_do'); ?></p>
    </div>
</div>

<div class="about-field">
    <?php $myPhilosophy_tagline_object = get_field_object('my_philosophy_tagline'); ?>
    <?php $myPhilosophy_description_object = get_field_object('my_philosophy_description'); ?>
    <h2 class="about-field-title"><?php echo $myPhilosophy_tagline_object['label']; ?></h2>
    <div class="about-field-content">
        <p class="philosophy-tagline">&#8220;&nbsp;<?php the_field('my_philosophy_tagline'); ?>&nbsp;&#8221;</p>
        <p class="philosophy-desc"><?php the_field('my_philosophy_description'); ?></p>
    </div>
</div>


<div class="about-field">
    <h2 class="about-field-title">Previous Career</h2>
    <div class="about-field-content">
        <p><?php the_field('previous_career'); ?></p>
        <div class="career-detail">
            <?php
            $career_query = new WP_Query(
                array(
                    'post_type' =>  'career',
                    'orderby'   =>  'date',
                    'order'     =>  'ASC'
                )
            );
            if ( $career_query -> have_posts() ) :
                while ( $career_query -> have_posts() ) :
                    $career_query -> the_post();
                    get_template_part('template-parts/content-career');
                endwhile;
            endif;
            ?>
        </div>
    </div>
</div>



<a class="home-button" href="<?php echo home_url(); ?>">HOME</a>

<?php
get_footer();
