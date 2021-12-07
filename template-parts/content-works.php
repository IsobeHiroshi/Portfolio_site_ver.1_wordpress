<?php ?>

<article <?php post_class(); ?> >
    <div class="work-thumbnail">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
    </div>
    <div class="work-summary">
        <h2 class="work-name">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>
        <p class="work-tagline"><?php the_field('tagline') ?></p>
        <div class="summary-footer">
            <div class="category-wrapper">
                <i class="fas fa-folder"></i>
                <?php the_category(' '); ?>
            </div>
            <div class="tags-wrapper">
                <i class="fas fa-tags"></i>
                <?php the_tags( " ", " , "); ?>
            </div>
        </div>
    </div>
</article>