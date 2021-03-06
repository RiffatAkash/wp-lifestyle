<?php
/* *
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package sparkling
 */

if (isset($_SERVER['HTTP_USER_AGENT']) && (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false))
    header('X-UA-Compatible: IE=edge,chrome=1');
?>
<!doctype html>
<!--[if !IE]>
<html class="no-js non-ie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>
<html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>
<html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>
<html class="no-js ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="<?php echo of_get_option('nav_bg_color'); ?>">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"> 

        <?php wp_head(); ?>

    </head>

    <body <?php body_class(); ?>>
        <a class="sr-only sr-only-focusable" href="#content">Skip to main content</a>
        <div id="page" class="hfeed site">

            <header id="masthead" class="site-header" role="banner">
                <nav class="navbar navbar-default  <?php if (of_get_option('sticky_header')) echo 'navbar-fixed-top'; ?>" role="navigation">
                    <div class="container">
                        <div class="row">
                            <div class="site-navigation-inner col-sm-12">
                                <div class="navbar-header">
                                    <button type="button" class="btn navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>


                                    <div id="logo">


                                    </div><!-- end of #logo -->

                                </div>
                                <?php sparkling_header_menu(); // main navigation  ?>
                            </div>
                        </div>


                    </div>
                </nav><!-- .site-navigation -->
                <div class="container-fluid">
                    <div class="row" >
                        <div class="header_a">
                        <a href="http://localhost/wordpress_new/"  <h1 class="header_class" style="color:#415965"><?php bloginfo('the_title') ?></h1></a>
                        </div>
                    </div>
                </div>
            </header><!-- #masthead -->

            <div id="content" class="site-content">

                <div class="top-section">
                    <?php sparkling_featured_slider(); ?>
                    <?php sparkling_call_for_action(); ?>
                </div>

                <div class="container main-content-area">
                    <?php $layout_class = get_layout_class(); ?>
                    <div class="row <?php echo $layout_class; ?>">
                        <div class="main-content-inner <?php echo sparkling_main_content_bootstrap_classes(); ?>">
