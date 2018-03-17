<?php
/**
 * Plugin Name: PDVN Translate
 * Plugin URI: https://phoenixdigi.vn
 * Description: A Translate plugin for Phoenix Digi Việt Nam Theme.
 * Version: 1.0.0
 * Author: Phoenix Digi Việt Nam
 * Author URI: https://phoenixdigi.vn
 * Requires at least: 4.9
 * Tested up to: 4.9
 *
 * Text Domain: pd-framework
 * Domain Path: /languages/
 *
 * @package PhoenixDigiVietNam
 * @link http://phoenixdigi.vn/plugins/framework/
 * @author Nam NCN
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

require_once 'includes/sitepress-multilingual-cms/sitepress.php';
require_once 'includes/wpml-string-translation/plugin.php';
require_once 'includes/wpml-translation-management/plugin.php';
require_once 'includes/wpml-media-translation/plugin.php';
require_once 'includes/wpml-sticky-links/plugin.php';
