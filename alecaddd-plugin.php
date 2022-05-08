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
 

if( !class_exists( 'AlecadddPlugin' ) ){

  class AlecadddPlugin {

    function register(){
      add_action( 'admin_enqueue_scripts', array( $this, 'enqueue' ));

      add_action( 'admin_menu', array( $this, 'add_admin_pages' ) );
    }

    public function add_admin_pages(){
      add_menu_page( 'Alecaddd Plugin', 'Alecaddd', 'manage_options', 'alecaddd_plugin', array( $this, 'admin_index'), 'dashicons-store', 110 );
    }

    public function admin_index() {
      // require template
    }
    
    protected function create_post_type(){
      add_action('init', array( $this, 'custom_post_type') );
    }

    function custom_post_type(){
      register_post_type( 'book', ['public' => true, 'label' => 'Books'] );
    }

    function enqueue(){
      // enqueue all our scripts
      wp_enqueue_style( 'mypluginstyle', plugins_url( '/assets/mystyles.css', __FILE__ ) );
      wp_enqueue_script( 'mypluginscript', plugins_url( '/assets/myscript.js', __FILE__ ) );
    }

    function activate(){
      require_once plugin_dir_path( __FILE__ ) . 'inc/alecaddd-plugin-activate.php';
      AlecadddPluginActivate::activate();
    }

  } // AlecaddPlugin() end

    $alecadddPlugin = new AlecadddPlugin();
    $alecadddPlugin->register();
    
    // activation
    // require_once plugin_dir_path( __FILE__ ) . 'inc/alecaddd-plugin-activate.php';
    register_activation_hook( __FILE__, array( $alecadddPlugin, 'activate' ) );
    
    // deactivation
    require_once plugin_dir_path( __FILE__ ) . 'inc/alecaddd-plugin-deactivate.php';
    register_deactivation_hook( __FILE__, array( 'AlecadddPluginDeactivate', 'deactivate' ) );
    
    // uninstall
    // register_uninstall_hook( __FILE__, array( $alecadddPlugin, 'uninstall' ) ); 
} // if class exists