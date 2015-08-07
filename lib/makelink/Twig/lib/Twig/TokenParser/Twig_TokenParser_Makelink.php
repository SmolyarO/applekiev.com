<?php
  class Twig_TokenParser_Makelink extends Twig_TokenParser {

    public function parse(Twig_Token $token) {
      $lineno = $token->getLine();
      $stream = $this->parser->getStream();

      while (!$stream->test(Twig_Token::BLOCK_END_TYPE)) {
        $key = $stream->expect(Twig_Token::NAME_TYPE)->getValue();   
        $stream->expect(Twig_Token::OPERATOR_TYPE, '=');
        $value = $this->parser->getExpressionParser()->parseExpression();
        $params[$key] = $value;
      }

      $stream->expect(Twig_Token::BLOCK_END_TYPE);
      return new Twig_Node_Makelink($params, $lineno, $this->getTag());
    }

    public function getTag() {
      return 'makelink';
    }
  }
?>