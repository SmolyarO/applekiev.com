<?php

  class Twig_Extension_Makelink extends Twig_Extension {

    public function getTokenParsers() {
      return array(new Twig_TokenParser_Makelink());
    }
    
    public function getName() {
      return 'makelink';
    }
  }
?>
