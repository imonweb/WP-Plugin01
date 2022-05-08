<?php
/*  
* @package AlecadddPlugin
*/

class AlecadddPluginActivate {

  public static function activate(){
    echo 'test';
    flush_rewrite_rules();
  }
}

