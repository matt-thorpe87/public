<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie-edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- <script src="/wp-content/themes/csds-generic/src/assets/js/search.js"></script> -->
    <!-- <link href="/wp-content/themes/csds-generic/style.css" rel="stylesheet"> -->
    <?php wp_head();
    include 'colours.php';
        ?>
</head>
<body  <?php body_class('qld__grid'); ?>>
    <header class="qld__header" role="banner">
        <nav class="qld__skip-link" aria-label="skip links" tabindex="-1">
            <a class="qld__skip-link__link" href="#content">Skip to main content</a>
            <a class="qld__skip-link__link" href="#main-nav">Skip to main navigation</a>
        </nav>
        <?php 
        $top_colour = get_field('header_top_colour', 'options');
        $top_class = "qld__header__pre-header--" . $top_colour;

        ?>
        <div class="qld__header__pre-header <?php echo esc_attr($top_class) ?>">
            <div class="container-fluid logo_navcontrol_wrapper">
                <a href="https://www.health.qld.gov.au/">
                    <span class="qld__header__pre-header-url">www.health.qld.gov.au</span>

                    <img class="qld__header__pre-header-brand-image" <?php
                    $mobile_logo = get_field('mobile_logo', 'option');
                    $svg_path =  content_url('/themes/csds-generic/dist/assets/images/img/header-logo-qgov--light.svg');

                    if (!empty($mobile_logo)) { ?>
                            src="<?php echo esc_attr($mobile_logo) ?>" />
                    <?php } else { ?>
                        src="<?php echo $svg_path ?>" />
                    <?php } ?>

                </a>

                <?php
                if (has_nav_menu('top_right_nav_menu')) {
                    wp_nav_menu(
                        array(
                            'theme_location' => 'top_right_nav_menu',
                            'container' => 'false',
                            'menu_class' => 'qld__header__cta-wrapper',
                            'items_wrap' => '<div id="%1$s" class="%2$s">%3$s</div>',
                            'walker' => new walker_top_right_menu()
                        )
                    );
                }
                ?>

                <div class="qld__header__main-nav-controls">
                <?php 
                    $search_option = get_field('search_form', 'option');
                    $hamburger = content_url('/themes/csds-generic/dist/assets/images/img/svg-icons.svg#qld__icon__mobile-menu');
                    $close = content_url('/themes/csds-generic/dist/assets/images/img/svg-icons.svg#qld__icon__close');


                    if ($search_option != 'no') {?>
                    <button aria-controls="qld-header-search" id="qld-search"
                        class="qld__header__toggle-main-nav qld__main-nav__toggle-search qld__main-nav__toggle-search--open"
                        aria-expanded="false">
                        <?php
                        $search = content_url('/themes/csds-generic/dist/assets/images/img/svg-icons.svg#qld__icon__search');
                        ?>

                        <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg"
                            class="qld__icon qld__icon--lg qld__main-nav__toggle-search-icon">
                            <use
                                href="<?php echo $search ?>">
                            </use>
                        </svg>

                        <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg"
                            class="qld__icon qld__icon--lg qld__main-nav__toggle-search-close-icon">
                            <use
                                href="<?php echo $close; ?>">
                            </use>
                        </svg>
                        <span class="qld__main-nav__toggle-text">Search</span>
                    </button>
                    <?php } 
                    ?>
                    <button aria-controls="main-nav" class="qld__header__toggle-main-nav qld__main-nav__toggle--open">
                        <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg"
                            class="qld__icon qld__icon--lg">
                            <use
                                href="<?php echo $hamburger; ?>">
                            </use>
                        </svg>
                        <span class="qld__main-nav__toggle-text">Menu</span>
                    </button>
                </div>

            </div>
        </div>
        <?php
        $header_colour = get_field('header_colour', 'options');
        $header_class = "qld__header__main--" . $header_colour;
        ?>
        <div class="qld__header__main <?php echo esc_attr($header_class); ?>">
            <div class="container-fluid">

                <div class="qld__header__brand">
                    <a href="<?php echo site_url(); ?>">
                        <div class="qld__header__brand-image">
                            <img class="qld__header__header-brand-image" alt="Queensland Government" <?php
                            $logo = get_field('site_logo', 'option');
                            $svg_logo_path =  content_url('/themes/csds-generic/dist/assets/images/img/header-logo-qgov--dark.svg');

                            if (!empty($logo)) { ?>
                                    src="<?php echo esc_attr($logo) ?>" />
                            <?php } else { ?>
                                src="<?php echo $svg_logo_path ?>"
                                />
                            <?php } ?>

                        </div>
                        <div class="qld__header__site-name">
                            <span class="qld__header__heading">
                                <?php echo get_bloginfo('name'); ?>
                            </span>
                            <span class="qld__header__subline">
                                <?php echo get_bloginfo('description'); ?>
                            </span>
                        </div>
                    </a>
                </div>

                <div class="qld__header__search" id="qld-header-search">
                    <div class="qld__main-nav__focus-trap-top"></div>
                    <?php
                    $search_option = get_field('search_form', 'option');
                    if ($search_option != 'no') {
                        ?>
                        <?php get_search_form(); ?>
                    <?php } ?>
                    <div class="qld__main-nav__focus-trap-bottom"></div>
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER END -->

    <!-- MAIN NAVIGATION -->
    <?php
    $nav_colour = get_field('nav_colour', 'option');
    $nav_class = ' qld__main-nav--' . $nav_colour;
    ?>
    <nav class="qld__main-nav qld__main-nav--mega <?php echo esc_attr($nav_class); ?>" id="#mainmenu" aria-label="main">
        <div class="container-fluid">
            <div class="qld__main-nav__content " id="main-nav">
                <div class="qld__main-nav__menu">
                    <div class="qld__main-nav__menu-inner">
                        <div class="qld__main-nav__focus-trap-top"></div>
                        <div class="qld__main-nav__header">
                            <h6 class="qld__main-nav__menu-heading">Menu</h6>
                            <button aria-controls="main-nav" class="qld__main-nav__toggle qld__main-nav__toggle--close">
                                <svg aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg"
                                    class="qld__icon qld__icon--md ">
                                    <use
                                        href="<?php echo $close; ?>">
                                    </use>
                                </svg>
                                <span class="qld__main-nav__toggle-text">Close</span>
                            </button>
                        </div>

                        <?php
                        if (has_nav_menu('mega_menu')) {
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'mega_menu',
                                    'menu_class' => 'qld__link-list',
                                    'walker' => new walker_mega_nav(),
                                )
                            );
                        } else {
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'main_nav_menu',
                                    'menu_class' => 'qld__link-list',
                                    'walker' => new Walker_Nav_Menu(),
                                    'depth' => 3

                                )
                            );
                        }
                        ?>
                        <div class="qld__main-nav__focus-trap-bottom"></div>

                    </div>
                </div>
                <div class="qld__main-nav__overlay" aria-controls="main-nav"></div>
            </div>
        </div>
    </nav>
    
    <div class="qld__widgets">
        <a href="#" class="qld__btn qld__btn--floating qld__btn--back-to-top show" aria-label="Back to top">
            <span>Back to top</span>
        </a>
    </div>

    <!-- MAIN NAVIGATION END -->