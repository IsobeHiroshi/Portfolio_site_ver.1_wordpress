<?php get_header(); ?>

<article <?php post_class(); ?> >

  <h2 class="entry-title">
    <?php 
      if ( is_single() ) :
        the_title(); 
      else: ?>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        <?php endif; ?>
  </h2>

  <?php if ( is_home() || is_category() || is_tag() || is_search() ) : ?>
    <div class="entry-category"><?php the_category( ' &#10043; ' ); ?></div>
    <div class="entry-thumbnail">
    <?php 
      the_post_thumbnail();
    endif; ?>
  </div>

  <div class="entry-content">
    <?php if ( is_single() ) : 
      the_post_thumbnail();
      the_content(); ?>
        <div class="entry-footer">
          <div class="entry-footer-category">
            <i class="fas fa-folder"></i>
            <?php the_category( ' &middot ' ); ?>
          </div>
          <div class="entry-footer-tags">
            <i class="fas fa-tag"></i>
            <?php the_tags( 'Tags: ' , ' | '); ?>
          </div>
        </div>
    <?php else:
        the_excerpt();
    endif; ?>
  </div>

</article>
