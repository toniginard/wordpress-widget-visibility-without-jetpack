<?php

/*
 * Plugin Name: Widget Visibility Without Jetpack
 * Plugin URI: https://github.com/toniginard/wordpress-widget-visibility-without-jetpack/
 * Description: Control what pages your widgets appear on. Based on Widget Visibility module, from Jetpack plugin, https://wordpress.org/plugins/jetpack/
 * Author: Toni Ginard
 * Version: 1.5
 * License: GPL2+
 * Text Domain: jetpack
 * Domain Path: /languages/
*/

load_plugin_textdomain('jetpack', false, basename( dirname( __FILE__ ) ) . '/languages' );

include dirname( __FILE__ ) . '/widget-visibility/widget-conditions.php';
