<?php
/*  
* @package AlecadddPlugin
*/
/*  
Plugin Name: Alecaddd Plugin
Plugin URI: htttps://alecaddd.com/plugin
Description: This is my first attempt on writing a custom Plugin for this amazing tutorial series.
Version: 1.0.0
Author: Alessandro "Alecaddd" Castellani
Author URI: http://alecadd.com
License: GPLv2 or later
Text Domain: alecaddd-plugin
*/
 
defined( 'ABSPATH' ) or die('Hey, what are you doing here? You silly human!');
 
if( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ){
  require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}

define( 'PLUGIN_PATH', plugin_dir_path( __FILE__ ));
define( 'PLUGIN_URL', plugin_dir_url( __FILE__ ));

if( class_exists( 'Inc\\Init' ) ) {
  Inc\Init::register_services();
}

