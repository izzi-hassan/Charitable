<?php
/**
 * Charitable Privacy Hooks.
 *
 * Action/filter hooks used for Charitable functions/hooks
 *
 * @package   Charitable/Functions/Privacys
 * @author    Eric Daams
 * @copyright Copyright (c) 2018, Studio 164a
 * @license   http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since     1.6.0
 * @version   1.6.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register the personal data exporter.
 *
 * @see Charitable_Privacy::register_exporter
 */
add_filter( 'wp_privacy_personal_data_exporters', array( $this, 'register_exporter' ), 10, 2 );