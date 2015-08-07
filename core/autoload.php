<?php
//chdir(dirname(__FILE__));
require 'var_dump.php';
require 'lib/smarty/libs/Smarty.class.php';

function __autoload($class_name) {
  if ( !file_exists('application/models/' . $class_name . '.php') ) {
    throw new Exception ("There is no $class_name Class"); 
  }
  else 
    require_once 'application/models/' . $class_name . '.php';
}

?>