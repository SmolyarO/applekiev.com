<?php
require 'core/autoload_v2.php';

session_start();


$route = $_GET['route'];
$router = new Router($route);


?>