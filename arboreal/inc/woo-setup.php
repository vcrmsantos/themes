<?php

/**
 *  WooCommerce Functions for ArboReal theme
 */
if (!function_exists('arboReal_woo_setup')) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     */
    function arboReal_woo_setup() {
        /*
         * Enable support for WooCemmerce.
         */
        add_theme_support('woocommerce');
    }

endif;
add_action('after_setup_theme', 'arboReal_woo_setup');

/**
 * Set Default Thumbnail Sizes for Woo Commerce Product Pages, on Theme Activation
 */
global $pagenow;

/*
 * Add basic WooCommerce template support
 *
 */

// First let's remove original WooCommerce wrappers
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);
remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

// Now we can add our own, the same used for theme Pages
add_action('woocommerce_before_main_content', 'buddha_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'buddha_wrapper_end', 10);

function buddha_wrapper_start() {
    echo '<div id="primary" class="col-md-9 mb-xs-24 ">';
    echo '<main id="main" class="site-main" role="main">';
}

function buddha_wrapper_end() {
    echo '</main></div>';
}

// Replace WooComemrce button class with Bootstrap
add_filter('woocommerce_loop_add_to_cart_link', 'arboReal_commerce_switch_buttons');

function arboReal_commerce_switch_buttons($button) {

    $button = str_replace('button', 'btn btn-filled', $button);

    return $button;
}
