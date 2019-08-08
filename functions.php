<?php
/**
 connect theme settings fom file theme-settings.php
 */
require get_template_directory() . '/includes/theme-settings.php';
add_action( 'after_setup_theme', 'sitearsenal_setup' );

/**
 * connect widgets
 */
require get_template_directory() . '/includes/widget-areas.php';
add_action( 'widgets_init', 'sitearsenal_widgets_init' );

/**
 * enqueue scripts and css files
 */
require get_template_directory() . '/includes/enqueue-script-style.php';


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/includes/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/includes/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/includes/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/includes/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/includes/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/includes/woocommerce.php';
}
