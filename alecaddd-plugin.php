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
 
class AlecadddPlugin {
   
  function activate() {
    // generate a CPT
    // flush rewrite rules
   }

   function deactivate(){
    // flush rewrite rules
   }

   function uninstall(){
    // delete CPT
    // delete all plugin data from the DB
   }
}

if( class_exists( 'AlecadddPlugin' ) ){

  $alecadddPlugin = new AlecadddPlugin();
   
}

// activation
register_activation_hook( __FILE__, array( $alecadddPlugin, 'activate' ) );

// deactivation
register_deactivation_hook( __FILE__, array( $alecadddPlugin, 'deactivate' ) );

// uninstall
 