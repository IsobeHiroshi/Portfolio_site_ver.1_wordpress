<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class="site-header">
    <div class="title-container">
      <h1>
        <?php
        if ( is_singular( 'past_work' ) ) :
          echo "Works";
        elseif ( is_404() ) :
          echo "404";
        else :
          the_title();
        endif;
        ?>
      </h1>
      <?php
      if ( is_404() ) :
        echo "Sorry, the page not found...";
      endif;
      ?>
    </div>
  </header>

  <div id="primary" class="content-area">
    <main id="main" class="site-main">