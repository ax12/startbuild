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
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'sitearsenal'); ?></a>

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
        </header><!-- #masthead -->
        </div> <!--end row-->
    </div><!--end container fluid-->
<div id="content" class="site-content">
