<?php ?>
<article <?php post_class(); ?> >

<div class="career-thumbnail">
    <a href="<?php the_field('company_url') ?>"><?php the_post_thumbnail(); ?></a>
</div>
<div class="company-detail">
  <h3 class="company-name">
    <a href="<?php the_field('company_url') ?>"><?php the_title(); ?></a>
  </h3>
  <p class="career-when"><?php the_field('when'); ?></p>
  <p class="career-place"><?php the_field('place'); ?></p>
  <p class="career-job-title"><?php the_field('job_title'); ?></p>
</div>

</article>
