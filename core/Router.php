<?php
Class Router {
  protected $route;
  protected $controller;
  protected $id;
  protected $data;

    public function __construct($route) {
        if (is_string($route) || is_int($route)) {
            $this->route = $route;
        }
        elseif ($this->route = 'index' || null){
            $this->route = 'index';
        }
        $this->controller = Router::getController();
        $this->data = new $this->controller;
    }

    private function getController() {
        if ($this->route == "index") {
            $this->controller = ucfirst($this->route)."Controller";
        }
        else {
            $rt = explode("/", $this->route);
            $this->controller = ucfirst($rt[0])."Controller";
        }
        return $this->controller;
        //$controller = isset($_REQUEST['c']) ? $_REQUEST['c'] : "Index";
        //$controller = ucfirst($controller)."Controller";
    }
    public function cont() {
        return $this->controller;
    }

}
?>