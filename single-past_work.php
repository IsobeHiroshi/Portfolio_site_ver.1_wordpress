<?php get_header(); ?>

<h2><?php the_title(); ?></h2>

<div class="work-single-wrapper">
    <div class="work-single-header">
        <div class="work-single-thumbnail">
            <?php the_post_thumbnail(); ?>
        </div>
        <a class="work-url" href="<?php the_field('work_url') ?>" target="_blank">Visit the page</a>
        <p class="open-up-new-window" >(A new window will open)</p>
    </div>

    <div class="work-detail">

        <p class="work-single-tagline"><?php the_field('tagline') ?></p>
        <p class="work-single-description"><?php the_field('description') ?></p>

        <?php
        if ( post_custom('the_goal')) :
            $theGoal_object = get_field_object('the_goal')
        ?>
            <h3 class="work-detail-heading"><?php echo $theGoal_object['label']?></h3>
            <p class="work-detail-content"><?php the_field('the_goal') ?></p>
        <?php endif; ?>

        <?php
        if ( post_custom('my_role')) :
            $myRole_object = get_field_object('my_role')
        ?>
            <h3 class="work-detail-heading"><?php echo $myRole_object['label']?></h3>
            <p class="work-detail-content"><?php the_field('my_role') ?></p>
        <?php endif; ?>

        <?php
        if ( post_custom('the_challenges')) :
            $theChallenges_object = get_field_object('the_challenges')
        ?>
            <h3 class="work-detail-heading"><?php echo $theChallenges_object['label']?></h3>
            <p class="work-detail-content"><?php the_field('the_challenges') ?></p>
        <?php endif; ?>
    </div>
</div><!-- .work-single-wrapper -->

<button class="home-button" type="button" onclick="history.back()">BACK</ｂ>

<?php
get_footer();
