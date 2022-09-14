<?php

/*
 * Plugin Name: Widget Visibility Without Jetpack
 * Plugin URI: https://github.com/toniginard/wordpress-widget-visibility-without-jetpack/
 * Description: Control what pages your widgets appear on. Based on Widget Visibility module, from Jetpack plugin, https://wordpress.org/plugins/jetpack/
 * Author: Toni Ginard
 * Version: 1.6
 * License: GPL2+
 * Text Domain: jetpack
 * Domain Path: /languages/
*/

load_plugin_textdomain('jetpack', false, basename(__DIR__) . '/languages' );

const JETPACK__VERSION = '11.3.1';
const JETPACK__PLUGIN_FILE = __FILE__;

include_once __DIR__ . '/assets/class-assets.php';
include_once __DIR__ . '/assets/class-constants.php';
include_once __DIR__ . '/widget-visibility/widget-conditions.php';
