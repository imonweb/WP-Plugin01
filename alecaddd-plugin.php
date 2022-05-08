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
 
// If this file is called directly, abort!
defined( 'ABSPATH' ) or die('Hey, what are you doing here? You silly human!');
 
// Require once the Composer autoload
if( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ){
  require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}

// Define CONSTANTS
define( 'PLUGIN_PATH', plugin_dir_path( __FILE__ ));
define( 'PLUGIN_URL', plugin_dir_url( __FILE__ ));
define( 'PLUGIN', plugin_basename( __FILE__ ));

use Inc\Base\Activate;
use Inc\Base\Deactivate;

/*  
* The code that runs during plugin activation 
*/

function activate_alecaddd_plugin(){
  Activate::activate();
}

/*  
* The code that runs during plugin deactivation 
*/

function deactivate_alecaddd_plugin(){
  Deactivate::deactivate();
}

register_activation_hook( __FILE__, 'activate_alecaddd_plugin' );
register_deactivation_hook( __FILE__, 'deactivate_alecaddd_plugin' );

if( class_exists( 'Inc\\Init' ) ) {
  Inc\Init::register_services();
}

