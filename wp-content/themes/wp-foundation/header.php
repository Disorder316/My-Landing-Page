<?php
/*

  Hutchens Industries
  -------------------------------------------
  Template: Header

 */

$domain = strtolower($_SERVER['SERVER_NAME']);

$canonical_href = 'http://hutchensindustries.com' . $_SERVER['REDIRECT_URL'];

if (strpos($domain, 'hutch-susp.com') !== FALSE) {
	header("HTTP/1.1 301 Moved Permanently"); 
	header("Location: " . $canonical_href); 
}

?><!doctype html>

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie ie6 lte9 lte8 lte7"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie ie7 lte9 lte8 lte7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie ie8 lte9 lte8"> <![endif]-->
<!--[if IE 9 ]>    <html <?php language_attributes(); ?> class="no-js ie ie9 lte9"> <![endif]-->
<!--[if (gte IE 10)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width">
        <meta name="description" content="<?php the_field('meta_description'); ?>" />

        <title><?php the_field('page_title') ?></title>
        <?
        $canonical_href = 'http://hutchensindustries.com' . $_SERVER['REDIRECT_URL'];
        ?>

        <link rel="canonical" href="<? echo $canonical_href ?>" />
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/hutch_icon_small.png">
        <!-- media-queries.js (fallback) -->
        <!--[if lt IE 9]>
            <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
        <![endif]-->

        <!-- html5.js -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="<? echo get_template_directory_uri(); ?>/javascripts/foundation/modernizr.foundation.js"></script>
        <link rel="stylesheet" type="text/css" media="all" href="<? echo get_template_directory_uri(); ?>/stylesheets/app.css" />
        <!-- Hutchens Styles -->
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_bloginfo('template_directory') . '/stylesheets/hutchens.css' ?>" />
        <link rel="stylesheet" type="text/css" media="all" href="<? echo get_template_directory_uri(); ?>/stylesheets/offcanvas.css" />
        <? if (is_front_page()): ?>
            <style>
                body { background: url('/wp-content/themes/wp-foundation/images/hutchens/building_bkgd.jpg') no-repeat center 10px; }

                @media screen and (max-width: 767px) {
                    body { background-size: 100%; background-position-y: 50px !important;}
                }

                @media screen and (max-width: 940px) {
                    body { background-size: 100%; background-position-y: 70px; }
                }

                @media screen and (max-width: 1024px) {
                    body { background-size: 100%; background-position-y: 70px; }
                }
            </style>
            <link rel="stylesheet" type="text/css" media="all" href="<? echo get_template_directory_uri(); ?>/stylesheets/home-page.css" />
        <? endif; ?>

        <? if (strpos(strtolower($_SERVER['REDIRECT_URL']), 'about-us') !== false): ?>
            <link rel="stylesheet" href="<? echo get_template_directory_uri(); ?>/fbox/jquery.fancybox.css" type="text/css" media="all" />
            <link rel="stylesheet" href="<? echo get_template_directory_uri(); ?>/fbox/helpers/jquery.fancybox-buttons.css" type="text/css" media="all" />
            <link rel="stylesheet" href="<? echo get_template_directory_uri(); ?>/fbox/helpers/jquery.fancybox-thumbs.css" type="text/css" media="all" />
            <link rel="stylesheet" href="<? echo get_template_directory_uri(); ?>/stylesheets/galleries.css" type="text/css" media="all" />

        <? endif; ?>


        <? if (strpos(strtolower($_SERVER['REDIRECT_URL']), 'series-10') !== false): ?>
            <link rel="stylesheet" href="<? echo get_template_directory_uri(); ?>/stylesheets/series-10.css" type="text/css" media="all" />
        <? endif; ?>
        <script src="<? echo get_template_directory_uri(); ?>/javascripts/foundation/jquery-1.8.2.js"></script>
        <link rel="stylesheet" type="text/css" media="all" href="<? echo get_template_directory_uri(); ?>/stylesheets/print.css" />
    </head>

    <body class="off-canvas slide-nav">
        <?php include_once("analyticstracking.php") ?>
        <!-- NAV -->
        <div id="nav-wrapper">
            <!--
                        ====
                            Begin Medium Screen Nav
                        ====
            -->
            <div class="row show-for-medium">
                <div class="twelve columns">
                    <nav class="top-bar">

                        <h1>
                            <a id="logo-link" href="/">
                                <img id="logo-image" src="<?php echo get_logo() ?>" alt="Hutchens Industries" />
                                <span class="logo-text">Hutchens Industries</span>
                            </a>
                        </h1>

                        <ul class="nav-bar right show-for-medium" id="large-screen-nav">
                            <li class="has-flyout"><a href="/product-lines/">Products</a></li>
                            <li class="has-flyout"><a href="/resources/">Resources</a></li>
                            <li><a href="/genuine-hutch/">Genuine Hutch</a></li>
							<li><a href="/resources/price-lists/">Pricing</a></li>
                            <li><a href="/about-us/">About Us</a></li>
                            <li><a href="/contact/">Contact Us</a></li>                            
                        </ul>

                    </nav>
                </div>
            </div>

            <!--
            ====
                END Medium Screen Nav
            ====
            -->


            <!--
            ====
                Begin Large Screen Nav
            ====
            -->
            <div class="row hide-for-medium">
                <div class="twelve columns">
                    <nav class="top-bar">

                        <h1>
                            <a id="logo-link" href="/">
                                <img id="logo-image" src="<?php echo get_logo() ?>" alt="Hutchens Industries" />
                                <span class="logo-text">Hutchens Industries</span>
                            </a>
                        </h1>

                      <!--  <a class="menu-button show-for-medium-down" id="menuButton" href="#footer-bottom"><img src="/wp-content/themes/wp-foundation/images/mobile_menu_icon.png"></a>-->
                        <a class="show-for-small" href="#footer-bottom"><img src="/wp-content/themes/wp-foundation/images/mobile_menu_icon.png"></a>

                        <ul class="nav-bar right hide-for-small" id="large-screen-nav">

                            <!-- Product Lines -->
                            <li id="nav-product-lines" class="has-flyout">
                                <a href="/product-lines/">Products</a>
                                <div class="flyout large left">
                                    <div class="row">
                                        <div class="six columns">

                                            <div class="link-heading">Spring Ride Sliders</div>
                                            <?
                                            $sub_menu_spring_ride = array(
                                                'theme_location' => '',
                                                'menu' => 'Spring Ride Sliders',
                                                'container' => '',
                                                'container_class' => '',
                                                'container_id' => '',
                                                'menu_class' => '',
                                                'menu_id' => '',
                                                'echo' => true,
                                                'fallback_cb' => '',
                                                'before' => '',
                                                'after' => '',
                                                'link_before' => '',
                                                'link_after' => '',
                                                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                                'depth' => 0,
                                                'walker' => ''
                                            );

                                            wp_nav_menu($sub_menu_spring_ride);
                                            ?>

                                            <div class="link-heading">Sliders for Air Rides</div>
                                            <?
                                            $sub_menu_air_ride = array(
                                                'theme_location' => '',
                                                'menu' => 'Sliders for Air Rides',
                                                'container' => '',
                                                'container_class' => '',
                                                'container_id' => '',
                                                'menu_class' => '',
                                                'menu_id' => '',
                                                'echo' => true,
                                                'fallback_cb' => '',
                                                'before' => '',
                                                'after' => '',
                                                'link_before' => '',
                                                'link_after' => '',
                                                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                                'depth' => 0,
                                                'walker' => ''
                                            );

                                            wp_nav_menu($sub_menu_air_ride);
                                            ?>
                                        </div>
                                        <!-- right col -->
                                        <div class="six columns">

                                            <div class="link-heading">2 &amp; 4 Spring Suspensions</div>

                                            <?
                                            $sub_menu_2_and_4 = array(
                                                'theme_location' => '',
                                                'menu' => '2 and 4 Spring Suspensions',
                                                'container' => '',
                                                'container_class' => '',
                                                'container_id' => '',
                                                'menu_class' => '',
                                                'menu_id' => '',
                                                'echo' => true,
                                                'fallback_cb' => '',
                                                'before' => '',
                                                'after' => '',
                                                'link_before' => '',
                                                'link_after' => '',
                                                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                                'depth' => 0,
                                                'walker' => ''
                                            );

                                            wp_nav_menu($sub_menu_2_and_4);
                                            ?>

                                            <div class="link-heading">Single Point Suspensions</div>
                                            <?
                                            $sub_menu_single_point = array(
                                                'theme_location' => '',
                                                'menu' => 'Single Point Suspensions',
                                                'container' => '',
                                                'container_class' => '',
                                                'container_id' => '',
                                                'menu_class' => '',
                                                'menu_id' => '',
                                                'echo' => true,
                                                'fallback_cb' => '',
                                                'before' => '',
                                                'after' => '',
                                                'link_before' => '',
                                                'link_after' => '',
                                                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                                'depth' => 0,
                                                'walker' => ''
                                            );

                                            wp_nav_menu($sub_menu_single_point);
                                            ?>



                                            <div class="link-heading">Pin Release Systems</div>
                                            <?
                                            $sub_menu_pin_release = array(
                                                'theme_location' => '',
                                                'menu' => 'Pin Release Systems',
                                                'container' => '',
                                                'container_class' => '',
                                                'container_id' => '',
                                                'menu_class' => '',
                                                'menu_id' => '',
                                                'echo' => true,
                                                'fallback_cb' => '',
                                                'before' => '',
                                                'after' => '',
                                                'link_before' => '',
                                                'link_after' => '',
                                                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                                'depth' => 0,
                                                'walker' => ''
                                            );

                                            wp_nav_menu($sub_menu_pin_release);
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- // Product Lines // -->

                            <li class="has-flyout"><a href="/resources/">Resources</a>
                                <div class="flyout medium left">
                                    <div class="row">
                                        <div class="twelve columns">
                                            <?
                                            $sub_menu_resources = array(
                                                'theme_location' => '',
                                                'menu' => 'Resources',
                                                'container' => '',
                                                'container_class' => '',
                                                'container_id' => '',
                                                'menu_class' => '',
                                                'menu_id' => '',
                                                'echo' => true,
                                                'fallback_cb' => '',
                                                'before' => '',
                                                'after' => '',
                                                'link_before' => '',
                                                'link_after' => '',
                                                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                                'depth' => 0,
                                                'walker' => ''
                                            );

                                            wp_nav_menu($sub_menu_resources);
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="/genuine-hutch/">Genuine Hutch</a></li>
							<li><a href="/resources/price-lists/">Pricing</a></li>
                            <li><a href="/about-us/">About Us</a></li>							
                            <li><a href="/contact/">Contact Us</a></li>
                            <li><a href="/">Home</a></li>
                        </ul>

                    </nav>
                </div>
            </div>

            <!--
            ====
                END Large Screen Nav
            ====
            -->

        </div>
        <!-- // NAV // -->

        <!-- HEADER -->
        <div id="header-wrapper">
            <div class="row">
                <div class="twelve columns">
                    <header role="banner" id="top-header">
                        <!-- <h1>Header / Banner</h1> -->
                    </header>
                </div>
            </div><!-- /row container -->
        </div>
