<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <!-- Compressed CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.7.5/dist/css/foundation.min.css" crossorigin="anonymous">

  

    <?php wp_head(); ?>
</head>

<body>
    <header>

        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class="cell">
                    
                    <nav class="sticky sticky-topbar" data-sticky data-options="anchor: page; marginTop: 0; stickyOn: small;">
                        <div class="top-bar topbar-responsive">
                            <div class="top-bar-title">
                                <span data-responsive-toggle="responsive-menu" data-hide-for="medium">
                                    <button class="menu-icon" type="button" data-toggle></button>
                                </span>
                                <!-- 
                                    <img class="logo" src="images/j-logo.jpg" alt="company logo" />
                                 -->
                                <a href="index.html">
                                <?php 
                                if(function_exists('the_custom_logo')){
                                  the_custom_logo();
                                }else{
                                  bloginfo('name');
                                }
                                ?>
                                </a>

                                
                            </div>
                            <div id="responsive-menu">
                                <?php
                                $args = array(
                                    'theme_location' => 'primary',
                                    'menu_class' => 'horizontal menu dropdown align-right'
                                );
                                ?>
                                <?php wp_nav_menu($args); ?>
                            </div>
                        </div>
                    </nav>
                    
                </div>
            </div>
        </div>

        <?php

        ?>
    </header>

  <!-- HERO  -->

  <div class="hero-section">
    <div class="hero-section-text">
      <!--div class="banner">
      <php if(get_theme_mod('header_image')) :?>
      <img src="<php echo esc_url(get_theme_mod('headeer_image')) ?>"  alt="banner">
      <php Endif;?>
      </div-->
      <!--<h1>Jerry Verschoor</h1>-->

      <?php if(get_theme_mod('header_text_field')) :?>
        <h1><?php echo get_theme_mod('header_text_field') ?></h1>
      <?php Endif;?>

      <!-- <h5>Portfolio Website</h5> --> 

      <?php if(get_theme_mod('header_desc_field')) :?>
        <h5><?php echo get_theme_mod('header_desc_field')?></h5>
      <?php Endif;?>

    </div>
  </div>
<!-- *** END HERO ***-->
  
 