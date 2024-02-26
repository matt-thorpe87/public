<?php 
/*
Template name: Hero banner
*/

get_header(); ?>
<main class="main" role="main">

<h2>testing 123</h2>

<!-- Intermediate Banner -->
<section
    id="banner-intermediate-123" class="qld__banner qld__banner__intermediate qld__banner--dark qld__banner--breadcrumbs qld__banner--has-hero">

    <style>
        @media (min-width:699px) {
            #banner-123 {
                background-image: url(/mysource_files/banner-bg.png);
                background-size: cover;
                background-repeat: no-repeat;
                background-position-x: center;
            }
        }
    </style>

    <div class="container-fluid">
        <div class="qld__banner__wrapper">
            <div class="qld__banner__main row">
                <!--@@ Hero image @@-->
                <div class="qld__banner__hero col-xs-12 col-md-7 col-lg-5 col-xl-4">
                    <div class="qld__banner__image qld__banner__image--mobile-hide" style="background-image: url('https://via.placeholder.com/782x520');"></div>
                    <div class="qld__banner__image qld__banner__image--background qld__banner__image--desktop-hide" style="background-image: url('/mysource_files/banner-bg.png');"></div>
                </div>

                <div class="qld__banner__content col-xs-12 col-md-6 col-lg-7">

                    <!-- @@ Breadcrumbs - Desktop @@-->
                        <!-- <nav class="qld__breadcrumbs
                        qld__breadcrumbs--dark

                        qld__banner__breadcrumbs qld__banner__breadcrumbs--desktop" aria-label="breadcrumb">
                            <ul class="qld__link-list qld__link-list--inline">
                                    <li >
                                        <a href="/home.html">Home</a>
                                    </li>
                                    <li >
                                        <a href="/">Design</a>
                                    </li>
                                    <li aria-current="page">
                                            Components
                                    </li>
                            </ul>
                        </nav> -->

                    <!--@@ Heading(s) @@ -->
                        <h1><?php the_field('main_tagline'); ?></h1>
                    <!--@@ Abstract @@-->
                        <div class="qld__banner__content--body qld__abstract">
                            <p><?php the_field('sub-tagline'); ?></p></div>

                    <!--@@ CTA Buttons @@-->
                        <ul class="qld__banner__content--cta qld__link-list">
                            <li>
                                <a class="qld__btn qld__btn--primary" data-type="class" href="<?php the_field('add_url_to_primary_button'); ?>" target="_blank" ><?php the_field('primary_button_label'); ?></a>
                            </li>

                            <li>
                                <a class="qld__btn qld__btn--secondary" data-type="class" href="<?php the_field('add_url_to_secondary_button'); ?>" target="_blank"><?php the_field('secondary_button_label'); ?></a>
                            </li>
                        </ul>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Intermediate Banner End-->

</main>
