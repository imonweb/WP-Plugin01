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

  // Public - can be accessed anywhere

  // Protected - can be accessed only within the class itself or extensions of the class

  // Private - can be accessed only within the class itself

  function __construct(){
    $this->print_stuff();
  }

  function register(){
    add_action( 'admin_enqueue_scripts', array( $this, 'enqueue' ));
  }
   
  protected function create_post_type(){
    add_action('init', array( $this, 'custom_post_type') );
  }

  function activate() {
    // generate a CPT
    $this->custom_post_type();
    // flush rewrite rules
    flush_rewrite_rules();
   }

   function deactivate(){
    // flush rewrite rules
   }

   function uninstall(){
    // delete CPT
    // delete all plugin data from the DB
   }

   function custom_post_type(){
     register_post_type( 'book', ['public' => true, 'label' => 'Books'] );
   }

   function enqueue(){
    // enqueue all our scripts
    wp_enqueue_style( 'mypluginstyle', plugins_url( '/assets/mystyles.css', __FILE__ ) );
    wp_enqueue_script( 'mypluginscript', plugins_url( '/assets/myscript.js', __FILE__ ) );
   }

   private function print_stuff(){
     echo 'Test';
   }
} // AlecaddPlugin() end

class SecondClass extends AlecadddPlugin {
  function register_post_type() {
    $this->create_post_type();
  }
}

if( class_exists( 'AlecadddPlugin' ) ){

  $alecadddPlugin = new AlecadddPlugin();
  $alecadddPlugin->register();
   
}

$secondClass = new SecondClass();
$secondClass->register_post_type();

// activation
register_activation_hook( __FILE__, array( $alecadddPlugin, 'activate' ) );

// deactivation
register_deactivation_hook( __FILE__, array( $alecadddPlugin, 'deactivate' ) );

// uninstall
// register_uninstall_hook( __FILE__, array( $alecadddPlugin, 'uninstall' ) ); 