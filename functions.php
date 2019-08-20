<?php
/**START adding carbon-fields**/
add_action('after_setup_theme', 'crb_load');
function crb_load(){
    require_once(get_template_directory() . '/includes/carbon-fields/vendor/autoload.php');
    \Carbon_Fields\Carbon_Fields::boot();
}

/**END adding carbon-fields**/

/**START add my files for carbon-fields*/
add_action('carbon_fields_register_fields', 'crb_register_custom_fields'); // Для версии 2.0 и выше
//add_action( 'carbon_register_fields', 'crb_register_custom_fields' ); // Для версии 1.6 и ниже
function crb_register_custom_fields()
{
    // путь к пользовательскому файлу определения поля (полей), измените под себя
    require get_template_directory() . '/includes/custom-field-options/matabox.php';
    require get_template_directory() . '/includes/custom-field-options/them-options.php';
}

/**END adding developers files for carbon-fields*/

/**END adding carbon-fields**/


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

/**
 * custom file for help
 *
 */
require get_template_directory() . '/includes/helpers.php';
/**
 *connect includes files for woo
 */
require get_template_directory() . '/woocommerce/includes/wc-functions.php';
require get_template_directory() . '/woocommerce/includes/wc-functions-remove.php';
