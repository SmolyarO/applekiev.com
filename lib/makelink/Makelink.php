<?php

  function smarty_function_makelink($params, &$smarty)
  {
    $controller = $params['c'];
    $action = $params['a'];
    $text = $params['text'];
    unset($params['c']);
    unset($params['a']);
    unset($params['text']);
    $url = Application::getRouter()->makeUrl($controller, $action, $params);
    $url = str_replace('&', '&amp;', $url);
    return <<<HTML
    <a href="$url">$text</a>
HTML;
  }

?>
