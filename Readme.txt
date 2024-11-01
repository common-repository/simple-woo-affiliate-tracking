=== Plugin Name ===
Contributors: jakebowles
Donate link: http://jakebowles.com/donate
Tags: ecommerce, woocommerce, affiliate, tracking, referral
Requires at least: 3.0.1
Tested up to: 4.0
Stable tag: 1.00
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

The Simple Woo Affiliate Tracking simply (ha!) tracks the sales driven by any URL appended with a 'refid'.

== Description ==

The Simple Woo Affiliate Tracking simply (ha!) tracks the sales driven by any URL appended with a 'refid'.

For example:

www.yoursite.com/?refid=lj419275070985lkhj0

Any body who clicks through that URL and buys a product through your store will have that unique 'refid' attached to their order.

This allows you to add your own refid to any link you want to distribute. You can export the number of sales assoicated with the id at any time through "Tools">"Simple Woo Affiliate Tracking" into a .csv file.

How it works:

The plugin detects the 'refid' appended to the URL and stores it in a cookie. During checkout, a 'refid' field is added to the checkout form (in a hidden state), and that field is set by plugin Javascript.

== Installation ==

1. Ensure WooCommerce is installed & active
2. Upload the simple-woo-affiliate-tracking.zip folder to Wordpress
3. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= What can I name the refid in my link? =

You can add any alphanumeric string the the link.

== Screenshots ==

= No screenshots = 

== Changelog ==

= 1.0 =
* Tested on Wordpress 4.0

= 0.10 =
* Initial Release

== Upgrade Notice ==
= 0.10 = 
* Initial Release

= 1.0 =
* This update reflects testing on Wordpress 4.0 but does not change functionality of the plugin