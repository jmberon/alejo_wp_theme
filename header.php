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

        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class="cell">
                    <nav class="sticky sticky-topbar" data-sticky data-options="anchor: page; marginTop: 0; stickyOn: small;">
                        <div class="top-bar topbar-responsive">
                            <div class="top-bar-title">
                                <span data-responsive-toggle="responsive-menu" data-hide-for="medium">
                                    <button class="menu-icon" type="button" data-toggle></button>
                                </span>
                                <a href="index.html"><img class="logo" src="images/j-logo.jpg" alt="company logo"></a>
                            </div>
                            <div id="responsive-menu">
                                <?php
                                $args = array(
                                    'theme_location' => 'primary',
                                    'menu_class' => 'horizontal menu dropdown align-right'
                                );
                                ?>
                                <?php wp_nav_menu($args); ?>

                                <!-- 
                            <ul class="horizontal menu dropdown align-right" data-dropdown-menu="drilldown medium-dropdown" data-auto-height="true" data-animate-height="true">
                                <li class="is-active"><a href="index.html">Home</a></li>
                                <li>
                                    <a href="poetry.html">Poetry</a>
                                    <ul class="menu horizontal">
                                        <li><a href="poetry.html#poems">Poems</a></li>
                                        <li><a href="poetry.html#illustrated poetry">Illustrated Poetry</a></li>
                                    </ul>
                                </li>
                                <li><a href="theatre.html">Theatre</a></li>
                                <li><a href="design.html">Design</a></li>
                    <li>
                        <a href="film.html">Film</a>
                        <ul class="menu horizontal">
                            <li><a href="film.html#storyboarding">Storyboarding</a></li>
                            <li><a href="film.html@concept art">Concept Art</a></li>
                            <li><a href="film.html@independent creations">Independent Creations</a></li>
                        </ul>
                    </li>
                    <li><a href="sculptures.html">Sculptures</a></li>
                    <li><a href="illustrations.html">Illustrations</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul> 
                -->

                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

        <?php
        /*
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
    */
        ?>
    </header>

    <!-- HERO  -->
    <div class="hero-section">
        <div class="hero-section-text">
            <h1>Jerry Verschoor</h1>
            <h5>Portfolio Website</h5>
        </div>
    </div>
    <!-- *** END HERO ***-->