<?php
/**
 * Plugin Name: Hide Gravity Form Labels
 * Plugin URI: https://wordpress.org/plugins/hide-gravity-form-labels/
 * Description: Adds options to hide labels and and sub-labels on Gravity Forms fields.
 * Version: 1.0.0
 * Author: PurposeWP
 * Author URI: https://purposewp.com
 * Copyright: (c) 2018 PurposeWP, LLC
 * License: GNU General Public License v2.0
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: hide-gf-labels
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );