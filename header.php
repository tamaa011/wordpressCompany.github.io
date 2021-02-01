<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset') ?>">
        <title>
            <?php wp_title('|', 'true', 'right') ?> 
            <?php bloginfo('name'); ?> 
        </title>
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <link rel="shortcut icon" href="img/Asset%201@4x.png">
        <?php wp_head(); ?>
    </head>
    <body>
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         <a class="navbar-brand" href="<?php bloginfo('url') ?>"><?php bloginfo('name') ?></a> <!-- to print blog name  -->
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <?php tamaa_bs_menu() ?>
            
        </div>
  </div>
</nav>
        