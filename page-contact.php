
  <?php get_header();?>
  <div class="contact-content">
    <?php the_content(); ?>
  </div>

  <ul class="contact-icons">
    <li>
      <span class="fas fa-envelope"></span>
    </li>
    <li>
      <a href="https://github.com/IsobeHiroshi"></a>
    </li>
    <li>
      <a href="https://www.linkedin.com/in/hiroshi-isobe/"></a>
    </li>
    <li>
      <a href="https://dev.to/isobehiroshi"></a>
    </li>
  </ul>
  <a class="home-button" href="<?php echo home_url(); ?>">HOME</a>
<?php get_footer(); ?>