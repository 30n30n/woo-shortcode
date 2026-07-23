# WooCommerce Info Shortcode

[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE)
[![WordPress](https://img.shields.io/badge/WordPress-5.6%2B-blue)](https://wordpress.org)
[![PHP](https://img.shields.io/badge/PHP-7.4%2B-777BB4)](https://php.net)

A lightweight, secure WordPress plugin to dynamically display WooCommerce store details and basic WordPress site information anywhere using clean shortcodes.

---

## 🚀 Features

* **Unified Store Info:** Display store address, city, zip code, or country using a single parameter-driven shortcode.
* **Native WooCommerce Integration:** Dynamically fetches up-to-date, localized country names using WooCommerce's native API (no bloated hardcoded arrays).
* **WordPress Metadata:** Quickly display site title, description, URLs, and admin email.
* **Backward Compatible:** Full support for legacy shortcodes like `[wooaddress1]`, `[woocity]`, etc.
* **Secure & Fast:** Code optimized for modern PHP standards with strict output escaping (`esc_html`) to prevent XSS vulnerabilities.

---

## 📖 Shortcode Usage

### 🛒 WooCommerce Store Information

Use the primary `[wooinfo]` shortcode with the `field` attribute:

| Shortcode | Description |
| :--- | :--- |
| `[wooinfo field="address1"]` | Store Address Line 1 |
| `[wooinfo field="address2"]` | Store Address Line 2 |
| `[wooinfo field="city"]` | Store City |
| `[wooinfo field="zip"]` | Store Zip / Postcode |
| `[wooinfo field="country"]` | Store Country Name |

<details>
<summary><b>Legacy Shortcodes (Click to expand)</b></summary>

These original shortcodes are fully supported for backward compatibility:
* `[wooaddress1]`
* `[wooaddress2]`
* `[woocity]`
* `[woozip]`
* `[woocountry]`

</details>

---

### 🌐 WordPress Site Information

Fetch general WordPress options using the `[bloginfo]` shortcode:

| Shortcode | Output |
| :--- | :--- |
| `[bloginfo info="name"]` | Site Title |
| `[bloginfo info="description"]` | Tagline |
| `[bloginfo info="url"]` | Site URL |
| `[bloginfo info="wpurl"]` | WordPress Address URL |
| `[bloginfo info="admin_email"]` | Admin Email |
| `[bloginfo info="language"]` | Current Site Language |

---

## 📦 Installation

1. Download or clone this repository into your WordPress plugin directory:
   ```bash
   wp-content/plugins/woo-shortcode
