<?php
//chdir(dirname(__FILE__));

spl_autoload_register('__autoload');

define ("DR", $_SERVER['DOCUMENT_ROOT']);
define ("DS", DIRECTORY_SEPARATOR);
define ("CONTROLLERS", DR . DS . 'application/controllers/');
define ("MODELS", DR . DS . 'application/models/');

require_once 'Router.php';

define('SMARTY_DIR', str_replace("\\", "/", getcwd()) . '/lib/smarty/libs/');
require_once(SMARTY_DIR . 'Smarty.class.php');

function __autoload($class_name)
{
    if (substr($class_name, -10) == 'Controller') {
        if (!file_exists(CONTROLLERS . $class_name . '.php')) {
            try {
                throw new Exception ("There is no Controller $class_name Class");
            } catch (Exception $e) {
                echo $e;
            }
        } else {
            require_once CONTROLLERS . $class_name . '.php';
        }
    } elseif (!file_exists(MODELS . $class_name . '.php')) {
        try {
            throw new Exception ("There is no
             $class_name Class");
        } catch (Exception $e) {
            echo $e;
        }
    } else {
        require_once MODELS . $class_name . '.php';
    }

}


?>