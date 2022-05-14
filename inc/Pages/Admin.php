<?php 

namespace Inc\Pages;

use \Inc\Base\BaseController;
use \Inc\Api\SettingsApi;

/*  
* @package AlecadddPlugin
*/

class Admin extends BaseController {

  // function __construct() { }

  public $settings;

  public $pages = array();

  public function __construct(){

    $this->settings = new SettingsApi();
 
  }

  public function register() {
    //  add_action( 'admin_menu', array( $this, 'add_admin_pages' ) );

    $pages =  array(
    
        array(
          'page_title' => 'Alecaddd Plugin', 
          'menu_title' => 'Alecaddd', 
          'capability' => 'manage_options', 
          'menu_slug' => 'alecaddd_plugin', 
          'callback' => function(){ echo '<h1> Plugin </h1>'; }, 
          'icon_url' => 'dashicons-store', 
          'position' => 110
        )
    ); 

    $this->settings->addPages( $pages )->register();
    // $this->settings->addPages( $this->pages )->withSubPage( 'Dashboard' )->register();
  }

  // public function add_admin_pages(){
  //   add_menu_page( 'Alecaddd Plugin', 'Alecaddd', 'manage_options', 'alecaddd_plugin', array( $this, 'admin_index'), 'dashicons-store', 110 );
  // }

  // public function admin_index() {
    // require template
     // require_once plugin_dir_path( __FILE__ ) . 'templates/admin.php';
      // require_once PLUGIN_PATH . 'templates/admin.php';
      // require_once $this->plugin_path . 'templates/admin.php';
  // }
} // Admin class end here