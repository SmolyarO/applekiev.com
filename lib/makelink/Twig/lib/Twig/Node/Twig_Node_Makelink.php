<?php
  class Twig_Node_Makelink extends Twig_Node {
  
     private $params;

        public function __construct($params, $lineno, $tag = null) {
          parent::__construct();
          $this->params = $params;
        }

        public function compile($compiler) {
          $compiler
          ->write('unset($params);')
          ;

        foreach ($this->params as $key => $value)
          $compiler
          ->write('$params[')
          ->string($key)
          ->raw(']=')
          ->subcompile($value)
          ->raw(";\n")
          ;

        $compiler
        ->write('$controller = $params["c"];')
        ->write('$action = $params["a"];')
        ->write('$text = $params["text"];')
        ->write('$id = $params["id"];')
        ->write('$class = $params["class"];')
        ->write('unset($params["c"]);')
        ->write('unset($params["a"]);')
        ->write('unset($params["text"]);')
        ->write('unset($params["id"]);')
        ->write('unset($params["class"]);')
        ->write('$url = Makeurl::MakeUrl($controller, $action, $params);')  // заглушка
        //  ->write('$url = Application::getRouter()->makeUrl($controller, $action, $this->params);')      ф-ция фреймворка                                                                                                                                                                                                                                                                       
        ->write('$url = str_replace("&", "&amp;", $url);')
        ->write('echo "<a href=\'$url\' id=\'$id\' class=\'$class\'> $text</a>";')         
        ;                 
        }
}
?>
