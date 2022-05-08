<?php 

namespace Inc\Base;

/*  
* @package AlecadddPlugin
*/

class Enqueue {

  public function register() {
    add_action( 'admin_enqueue_scripts', array( $this, 'enqueue' ));
  }

  function enqueue(){
    // enqueue all our scripts
    // wp_enqueue_style( 'mypluginstyle', plugins_url( '/assets/mystyles.css', __FILE__ ) );
    wp_enqueue_style( 'mypluginstyle', PLUGIN_URL . 'assets/mystyles.css');
    wp_enqueue_script( 'mypluginscript', PLUGIN_URL . 'assets/myscript.js');
  }

} // enqueue