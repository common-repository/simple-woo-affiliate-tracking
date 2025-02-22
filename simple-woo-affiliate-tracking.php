<?php
/**
 * Plugin Name: Simple Woo Affiliate Tracking
 * Plugin URI: http://jakebowles.com/simple-woo-affiliate-tracking
 * Description: This plugin tracks WooCommerce sales driven by unique referral ids.
 * Version: 1.00
 * Author: Jake Bowles
 * Author URI: http://jakebowles.com
 * License: GPL2
 */
/*  Copyright 2014  Jake Bowles  (email : jake@jakebowles.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/



/**
 * Abort if this file was accessed directly.
 */
if ( ! defined( 'ABSPATH' ) ) { 
    exit; 
}

/**
 * The code that runs during plugin activation.
 */
require_once plugin_dir_path( __FILE__ ) . 'includes/class-simple-woo-affiliate-tracking-activator.php';

/** 
 * This action is documented in includes/class-simple-woo-affiliate-tracking-activator.php.
 */
register_activation_hook( __FILE__, array( 'Simple_Woo_Affiliate_Tracking_Activator', 'activate' ) );

/**
 * This requires the main plugin class.
 */
require_once plugin_dir_path( __FILE__ ) . '/includes/class-simple-woo-affiliate-tracking.php';

/**
 * This instantiates a new Simple_Woo_Affiliate_Tracking class
 */
function run_simple_woo_affiliate_tracking() {

	$swat = new Simple_Woo_Affiliate_Tracking();
	$swat->run();

}
/**
 * Fire the function
 */
run_simple_woo_affiliate_tracking();
