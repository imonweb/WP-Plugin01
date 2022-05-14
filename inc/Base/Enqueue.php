<?php 

namespace Inc\Base;

use \Inc\Base\BaseController;

/*  
* @package AlecadddPlugin
*/

class Enqueue extends BaseController {

  public function register() {
    add_action( 'admin_enqueue_scripts', array( $this, 'enqueue' ));
  }

  function enqueue(){
    // enqueue all our scripts
    // wp_enqueue_style( 'mypluginstyle', plugins_url( '/assets/mystyles.css', __FILE__ ) );
    // wp_enqueue_style( 'mypluginstyle', PLUGIN_URL . 'assets/mystyles.css');
    wp_enqueue_style( 'mypluginstyle', $this->plugin_url . 'assets/mystyles.css');
    wp_enqueue_script( 'mypluginscript', $this->plugin_url . 'assets/myscript.js');
  }

} // enqueue