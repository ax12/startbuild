<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package startbuild
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#"><?php esc_html_e('Skip to content', 'sitearsenal'); ?></a>

    <div class="container-fluid">
        <header id="masthead" class="site-header">
            <div class="row mx-head-row">

                <div class="col-md-3">
                    <img class="float-right" src="<?php echo get_template_directory_uri() . '/img/logo-fazan.png' ?>" alt="">
                </div>

                <div class="col-md-9">
                    <nav class="navbar  navbar-expand-lg navbar-light nav soloha-menu-top  nav-link navbar-nav text-center ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarNav">
                            <?php
                            wp_nav_menu([
                                'theme_location' => 'fazan_menu',
                                'menu_id' => 'primary-menu',
                                'depth' => 2,
                                'container' => false,
                                'menu_class' => 'navbar-nav mr-auto',
                                'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                                'walker' => new WP_Bootstrap_Navwalker()
                            ]);
                            ?>
                        </div>


                    </nav><!-- #site-navigation -->
                </div>
            </div> <!--end row-->

            <div class="row ">
                <div class="col-md-12 mx-row-location text-center">
                    <a class="text-light text-decoration-none" href="tel:<?php echo carbon_get_theme_option( 'crb_telephone' ); ?>"> <i class="fas fa-phone-alt mx-awesom"></i> <span> <?php echo carbon_get_theme_option( 'crb_telephone' ); ?></span></a>

                    <i class="fas fa-map-marker-alt mx-awesom"></i> <span> <?php echo carbon_get_theme_option( 'crb_address' ); ?></span>

                    <i class="fas fa-clock mx-awesom"></i> <span> <?php echo carbon_get_theme_option( 'crb_hours' ); ?></span>
                </div>
            </div>
            <div class="row mx-head-main main-header-row">
                <div class="col-md-2 p-0 col-3">
                    <img class="float-left" src="<?php echo get_template_directory_uri() . '/img/left_img.png' ?>" alt="">
                </div>
                <div class="col-md-8 col-6  p-0">
                   <img class="mx-auto d-block" src="<?php echo get_template_directory_uri() . '/img/fazan.png' ?>" alt="">

                </div>

                <div class="col-md-2 p-0 col-3">
                    <img class="float-right" src="<?php echo get_template_directory_uri() . '/img/right_img.png' ?>" alt="">
                </div>

            </div>
        </header><!-- #masthead -->

    </div><!--end container fluid-->