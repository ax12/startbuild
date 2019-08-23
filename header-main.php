
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'sitearsenal' ); ?></a>

	<header id="masthead" class="site-header">
        <div class="container-fluid">
        <div class="row toolbar">
            <div class="col-md-4">Офис — г. Екатеринбург, ул. Чайковского, 16, оф. 9</div>
            <div class="col-md-4">Склад — г. Екатеринбург, пер. Базовый, 47</div>
            <div class="col-md-4"><i class="fas fa-search"></i> Поиск</div>
            <div class="search">

                <input class="search_box" type="checkbox" id="search_box">
                <label class="icon-search" for="search_box"><span class="fas fa-search" aria-hidden="true"></span></label>
                <div class="search_form">
                    <form method="POST" action="<?php esc_url( home_url( '/' ) );?>">
                        <input type="text" value="<?php get_search_query();?>" name="s" placeholder="Искать...">
                        <input type="submit" value="Поиск">
                    </form>
                    <div class="search-result"></div>
                </div>
            </div>

        </div>





        </div><!--        end container-fluid-->
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$sitearsenal_description = get_bloginfo( 'description', 'display' );
			if ( $sitearsenal_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $sitearsenal_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'sitearsenal' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
