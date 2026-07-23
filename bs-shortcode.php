<?php
/**
 * Plugin Name: Woocommerce info Shortcode
 * Description: Clean, lightweight plugin to render WooCommerce and Site info via shortcodes.
 * Author: Sina Arzany
 * Author URI: https://arzany.com
 * License: MIT
 * Version: 2.0
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Render blog information
 * Usage: [bloginfo info='name']
 */
add_shortcode('bloginfo', function($atts) {
    $atts = shortcode_atts([
        'filter' => 'display',
        'info'   => '',
    ], $atts, 'bloginfo');

    $allowed_infos = [
        'name', 'description', 'wpurl', 'url', 'pingback_url',
        'admin_email', 'charset', 'version', 'html_type', 'language',
        'atom_url', 'rdf_url', 'rss_url', 'rss2_url',
        'comments_atom_url', 'comments_rss2_url',
    ];

    if (!in_array($atts['info'], $allowed_infos, true)) {
        return '';
    }

    $filter = in_array(strtolower($atts['filter']), ['raw', 'display'], true) 
        ? strtolower($atts['filter']) 
        : 'display';

    return esc_html(get_bloginfo($atts['info'], $filter));
});

/**
 * Unified WooCommerce Store Info Shortcode
 * Usage: [wooinfo field="address1|address2|city|zip|country"]
 */
add_shortcode('wooinfo', function($atts) {
    $atts = shortcode_atts([
        'field' => 'address1',
    ], $atts, 'wooinfo');

    switch ($atts['field']) {
        case 'address1':
            return esc_html(get_option('woocommerce_store_address', ''));

        case 'address2':
            return esc_html(get_option('woocommerce_store_address_2', ''));

        case 'city':
            return esc_html(get_option('woocommerce_store_city', ''));

        case 'zip':
        case 'postcode':
            return esc_html(get_option('woocommerce_store_postcode', ''));

        case 'country':
            $store_raw_country = get_option('woocommerce_default_country', '');
            $country_code      = explode(':', $store_raw_country)[0] ?? '';

            // Utilize native WooCommerce country helper if available
            if (function_exists('WC') && isset(WC()->countries)) {
                $countries = WC()->countries->get_countries();
                return esc_html($countries[$country_code] ?? $country_code);
            }

            return esc_html($country_code);

        default:
            return '';
    }
});

/**
 * Backward compatibility for legacy shortcodes:
 * [wooaddress1], [wooaddress2], [woocity], [woozip], [woocountry]
 */
add_shortcode('wooaddress1', fn() => do_shortcode('[wooinfo field="address1"]'));
add_shortcode('wooaddress2', fn() => do_shortcode('[wooinfo field="address2"]'));
add_shortcode('woocity',     fn() => do_shortcode('[wooinfo field="city"]'));
add_shortcode('woozip',      fn() => do_shortcode('[wooinfo field="zip"]'));
add_shortcode('woocountry',  fn() => do_shortcode('[wooinfo field="country"]'));
