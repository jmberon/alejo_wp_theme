<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    
    <!-- Compressed CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.7.5/dist/css/foundation.min.css" crossorigin="anonymous">
    
    <!-- Compressed JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.7.5/dist/js/foundation.min.js" crossorigin="anonymous"></script>
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div class ="container">
            <h1><?php bloginfo('name'); ?></h1>
            <h2><?php bloginfo('description'); ?></h2>
        </div>
    </header>
    <nav class="main-nav">
        <div class="container">
            <?php 
                $args = array(
                'theme_location' => 'primary'
                ); 
            ?>
        <?php wp_nav_menu($args); ?>
        </div>
    </nav>
    
    <!-- HERO  -->
    <div class="hero-section">
        <div class="hero-section-text">
        <h1>Jerry Verschoor</h1>
        <h5>Portfolio Website</h5>
        </div>
    </div>
    <!-- *** END HERO ***-->