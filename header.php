<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width">
  <meta charset="<?php bloginfo('charset'); ?>">
  <title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
  <?php wp_head(); ?>
  
</head>
<body <?php body_class(); ?>>
  <header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
              <?php the_custom_logo(); ?>           

      </div>

      <nav class="main-nav float-right d-none d-lg-block">

                   <?php
    $args = array(
        'theme_location' => 'meu_menu_principal',
        'container' => false,
        'menu_class' => '"main-nav float-right d-none d-lg-block',
        'container_class' => '',
        'add_li_class'  => ''


    );
    wp_nav_menu( $args );
?>

        

      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->