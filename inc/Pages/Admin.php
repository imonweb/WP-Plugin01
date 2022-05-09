<?php 

namespace Inc\Pages;

use \Inc\Base\BaseController;
use \Inc\Base\SettingsApi;


/*  
* @package AlecadddPlugin
*/

class Admin extends BaseController {

  public $settings;

  // function __construct() { }

  public function __construct(){
    $this->settings = new SettingsApi();
  }

  public function register() {
    //  add_action( 'admin_menu', array( $this, 'add_admin_pages' ) );

    $pages = [
      'page_title' => 'Alecaddd Plugin', 'Alecaddd', 'manage_options', 'alecaddd_plugin', array( $this, 'admin_index'), 'dashicons-store', 110;
    ];

    $this->settings->addPages( 'admin' )->register();
  }

  /*
  public function add_admin_pages(){
    add_menu_page( 'Alecaddd Plugin', 'Alecaddd', 'manage_options', 'alecaddd_plugin', array( $this, 'admin_index'), 'dashicons-store', 110 );
  }

  public function admin_index() {
    // require template
      // require_once plugin_dir_path( __FILE__ ) . 'templates/admin.php';
      // require_once PLUGIN_PATH . 'templates/admin.php';
      require_once $this->plugin_path . 'templates/admin.php';
  }

  */
} // Admin class end here