<?php
  require_once './Twig/lib/Twig/Autoloader.php';
  Twig_Autoloader::register();
/*  require_once './Twig/lib/Twig/Extension/Twig_Extension_Makelink.php';
  require_once './Twig/lib/Twig/TokenParser/Twig_TokenParser_Makelink.php';
  require_once './Twig/lib/Twig/Node/Twig_Node_Makelink.php';*/
  
$loader = new Twig_Loader_Filesystem('./view/');
$twig = new Twig_Environment($loader);
$twig->addExtension(new Twig_Extension_Makelink());

$template = $twig->loadTemplate('index.tpl');

$object=new TestClass();
$object->setValue('Testing Name');

echo $template->render(array('object' => $object));

  

?>