<?php
class Category {
    private $category = array();
    private $db;
    private $isLoaded = false;
    private $modified = false;

    public function __construct ($id = NULL) {
        if (is_int($id) || is_null($id)) {
            $this->category['id'] = $id;
        }
        if (!isset($this->db))
            $this->db = Database::getInstance();
        else throw new Exception('Id value must be integer');
    }

    public function loadData() {
        if (!$this->isLoaded && isset($_REQUEST['id'])) {
        }
    }

}