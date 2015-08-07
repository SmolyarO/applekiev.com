<?php
    chdir(dirname(__FILE__));
    
    function __autoload($class_name) {
        require_once $class_name.'.php';
    }

require_once './Twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();


?>
