<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <title><?php wp_title('&middot;','true','right'); ?><?php bloginfo('name'); ?></title>
    <link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/main.min.css">
    <link rel="icon" type="image/png" href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/favicon-16x16.png" sizes="16x16">  
    <link rel="icon" type="image/png" href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/favicon-32x32.png" sizes="32x32">  
    <link rel="icon" type="image/png" href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/favicon-96x96.png" sizes="96x96">
    <link href="https://micro.blog/axel" rel="me" />
    <?php
    if ( is_archive() ){
      include('inc/meta-archive.php');
    } else if ( is_single() || is_page() ){
      include('inc/meta-single.php');
    } else if ( is_home() ){
      include('inc/meta-home.php');
    } else{
      include('inc/meta.php');
    }
    ?>
    <?php wp_head(); ?>
</head>

<body
  <?php if(is_front_page()){ echo " class=\"h-card\""; } ?>>

  <nav class="py-5">
    <div class="container">
      <div class="row justify-content-center">

        <!-- logo -->
        <div class="col-8 col-lg-4">
          <p class="my-0">
            <a class="logo u-url" rel="me" href="<?php bloginfo('url'); ?>">
                <strong class="p-name"><?php bloginfo('name'); ?></strong>
                <p class="my-0"><?php bloginfo('description'); ?></p>
            </a>
          </p>
          
        </div>
        
        <!-- nav -->
        <div class="col-12 col-lg-6 menu-container">
          <?php include('inc/social.php'); ?>
          <ul class="menu menu-main d-flex my-0">
            <?php wp_nav_menu( array( 'name' => 'Nav Menu', 'items_wrap' => '%3$s', 'container' => false ) ); ?>
          </ul>
          <a href="#" class="menu-close">Close Menu</a>
        </div>
        <div class="col-4 menu-opener">
          <a href="#" class="menu-open">Open Menu</a>
        </div>
      </div>
    </div>
  </nav>