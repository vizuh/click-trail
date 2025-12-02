<?php
/**
 * Plugin Name: Funnelsheet Journey Tracker & Consent
 * Plugin URI:  https://vizuh.com
 * Description: Captures marketing parameters (UTMs, Click IDs), persists them, and handles basic consent management.
 * Version:     1.0.0
 * Author:      Vizuh
 * License:     GPL-2.0-or-later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Source:      https://github.com/vizuh/funnelsheet-journey-tracker
 * Text Domain: funnelsheet-journey-tracker
 * Domain Path: /languages
 * License:     GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Define Constants
define( 'FUNNELSHEET_JOURNEY_VERSION', '1.0.0' );
define( 'FUNNELSHEET_JOURNEY_DIR', plugin_dir_path( __FILE__ ) );
define( 'FUNNELSHEET_JOURNEY_URL', plugin_dir_url( __FILE__ ) );
define( 'FUNNELSHEET_JOURNEY_BASENAME', plugin_basename( __FILE__ ) );
define( 'FUNNELSHEET_JOURNEY_PII_NONCE_ACTION', 'funnelsheet_journey_pii_nonce' );

// Include Core Class
require_once FUNNELSHEET_JOURNEY_DIR . 'includes/class-clicktrail-core.php';
require_once FUNNELSHEET_JOURNEY_DIR . 'includes/clicktrail-attribution-functions.php';
require_once FUNNELSHEET_JOURNEY_DIR . 'includes/clicktrail-canonical.php';

/**
 * Initialize the plugin
 */
function funnelsheet_journey_init() {
        $plugin = new ClickTrail_Core();
        $plugin->run();
}
add_action( 'plugins_loaded', 'funnelsheet_journey_init' );
