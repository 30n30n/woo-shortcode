=== Woocommerce Info Shortcode ===
Contributors:      Sina Arzany
Plugin Name:       Woocommerce Info Shortcode
Plugin URI:        http://arzany.com
Tags:              shortcode, woocommerce, woocommerce_option, store info
Author URI:        http://arzany.com
Author:            Sina Arzany
Donate link:       http://arzany.com
Requires at least: 5.6
Tested up to:      6.5
Requires PHP:      7.4
Stable tag:        2.0
License:           MIT
License URI:       https://opensource.org/licenses/MIT

Lightweight WordPress plugin to display WooCommerce store details and site metadata anywhere using clean shortcodes.

== Description ==

WooCommerce Info Shortcode allows you to dynamically display your store's address, location details, and basic WordPress site information inside posts, pages, widgets, or templates using simple shortcodes.

### Features
* **Unified Shortcode:** Use `[wooinfo field="..."]` to easily pull store address, city, postcode, or country.
* **Native WooCommerce Integration:** Dynamically fetches up-to-date localized country names directly from WooCommerce instead of heavy hardcoded arrays.
* **WordPress Info:** Display site name, description, admin email, URLs, and more with `[bloginfo info="..."]`.
* **Lightweight & Secure:** Clean, modern code optimized for performance and sanitized against security risks.
* **Backward Compatible:** Full support for legacy shortcodes like `[wooaddress1]`, `[woocity]`, etc.

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/woocommerce-info-shortcode` directory, or install the plugin directly through the WordPress plugins screen.
2. Activate the plugin through the **Plugins** screen in WordPress.
3. Use the shortcodes in your content, widgets, or page builder!

== Usage ==

### WooCommerce Store Info
* `[wooinfo field="address1"]` - Store Address Line 1
* `[wooinfo field="address2"]` - Store Address Line 2
* `[wooinfo field="city"]` - Store City
* `[wooinfo field="zip"]` - Store Zip / Postcode
* `[wooinfo field="country"]` - Store Country Name

*Legacy Shortcodes (supported):* `[wooaddress1]`, `[wooaddress2]`, `[woocity]`, `[woozip]`, `[woocountry]`

### WordPress Site Info
* `[bloginfo info="name"]` - Site Title
* `[bloginfo info="description"]` - Tagline
* `[bloginfo info="url"]` - Site URL
* `[bloginfo info="admin_email"]` - Admin Email

== Frequently Asked Questions ==

= Does this require WooCommerce to be active? =
The `[bloginfo]` shortcodes will work on any WordPress site. WooCommerce shortcodes will gracefully default or display available option values if WooCommerce is installed.

== Changelog ==

= 2.0 =
* **Refactor:** Replaced 250+ hardcoded country array with native WooCommerce WC()->countries API.
* **Feature:** Consolidated store info into a unified `[wooinfo field="..."]` shortcode.
* **Security:** Added strict output escaping (`esc_html`) and direct access prevention.
* **Performance:** Optimized codebase for modern PHP (7.4+).

= 1.0 =
* Initial release.

== Upgrade Notice ==

= 2.0 =
Version 2.0 improves performance by replacing hardcoded country lists with native WooCommerce APIs, adding a unified `[wooinfo]` shortcode, and improving security escaping. Full backward compatibility is maintained.
