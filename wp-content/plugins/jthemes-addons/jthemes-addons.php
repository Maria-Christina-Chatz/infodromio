<?php
/*
  Plugin Name: Jthemes Add-ons
  Plugin URI: https://jthemes.net/plugins/jthemes-add-ons
  Version: 1.0
  Author: Jthemes
  Author URI: https://jthemes.net/plugins/jthemes-add-ons
  Description: Supercharge your WordPress theme with mega pack of shortcodes
  Text Domain: jthemes
  Domain Path: /languages
  License: GPL
 */

// Define plugin constants
define( 'TS_PLUGIN_FILE', __FILE__ );
define( 'TS_PLUGIN_VERSION', '1.0' );
define( 'TS_ENABLE_CACHE', true );

// Includes
require_once 'inc/vendor/sunrise.php';
require_once 'inc/core/admin-views.php';
require_once 'inc/core/requirements.php';
require_once 'inc/core/load.php';
require_once 'inc/core/assets.php';
require_once 'inc/core/shortcodes.php';
require_once 'inc/core/tools.php';
require_once 'inc/core/data.php';
require_once 'inc/core/generator-views.php';
require_once 'inc/core/generator.php';
require_once 'inc/core/widget.php';
require_once 'inc/core/counters.php';
require_once 'inc/portfolio/portfolio-post-type.php';
require_once 'inc/pricing/pricing-post-type.php';
require_once 'inc/functions/functions.php';
require_once 'inc/widgets/recent-posts.php';
require_once 'inc/widgets/categories.php';
require_once 'inc/widgets/contact.php';
require_once 'inc/widgets/users.php';
require_once 'inc/widgets/call-to-action.php';

function jthemes_rewrite_flush() {
  jthemes_portfolio_post_type();
  jthemes_pricing_post_type();
  flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'jthemes_rewrite_flush' );