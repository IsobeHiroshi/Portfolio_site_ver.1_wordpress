<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- OGP property setting from here -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://hiroshi-isobe.com/">
  <meta property="og:title" content="Hiroshi Isobe Portfolio Site">
  <meta property="og:description" content="A developer with web marketing and communication skills.">
  <meta property="og:image" content="<?php bloginfo('stylesheet_directory'); ?>/images/OGP-thumbnail.jpg">
  <!-- OGP property setting ends here -->
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <h1 class="site-title">
      <span id="title1stRow">HELLO, I AM</span>
      <span id="title2ndRow">HIROSHI</span>
    </h1>
    <div class="main-image-container">
      <img class="main-image" src="<?php bloginfo('stylesheet_directory'); ?>/images/profile.jpg">
    </div>
    <?php
      wp_nav_menu( array(
          'theme_location'    =>  'menu-main',
          'container'         =>  'nav',
          'container_class'   =>  'menu-container',
          'menu_class'        =>  'main-menu'
      ) );
    ?>
    <?php wp_footer(); ?>
</body>