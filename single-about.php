<?php get_header(); ?>

<div class="about-pic-container">
    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/about-page-pic.jpg" alt="about-page-pic">
</div>

<div class="about-field">
    <?php $whatICanDo_object = get_field_object('what_i_can_do'); ?>
    <h2 class="about-field-title"><?php echo $whatICanDo_object['label']; ?></h2>
    <p class="about-field-content"><?php the_field('what_i_can_do'); ?></p>
</div>

<div class="about-field">
    <?php $myPhilosophy_object = get_field_object('my_philosophy'); ?>
    <h2 class="about-field-title"><?php echo $myPhilosophy_object['label']; ?></h2>
    <p class="about-field-content"><?php the_field('my_philosophy'); ?></p>
</div>

<div class="about-field">
    <?php $previousCareer_object = get_field_object('previous_career'); ?>
    <h2 class="about-field-title"><?php echo $previousCareer_object['label']; ?></h2>
    <p class="about-field-content"><?php the_field('previous_career'); ?></p>
</div>

<a class="home-button" href="<?php echo home_url(); ?>">HOME</a>

<?php
get_footer();
