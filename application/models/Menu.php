<?php
Class Menu {
  private $id;
  private $name;
  private $value;
  private $result;
  private $mysqli;
  
  public function __construct($id = NULL) {
    if(is_int($id) || is_null($id)) {
      $this->id = $id;
    }
  }
  
  public function getItem() {
    $this->mysqli = Database::getInstance();
    $result = $this->mysqli->query("SELECT * FROM `category` AS c JOIN `category_description` AS d ON c.`cat_id`=d.`cat_d_id` WHERE c.`cat_menu`=1");
      while ($row = $result->fetch_assoc()) {
        $this->result[]=$row;
        //$this->id[] = $row['cat_id'];
        //$this->name[] = $row['menu_name'];
        //$this->value[] = $row['menu_value'];
      }
    return $this->result;
  }
  
  public function setItem($name, $value) {
    $this->mysqli = Database::getInstance();
    $this->mysqli->query("INSERT INTO menu SET menu_name = '$name', menu_value = '$value'" );
    //$this->mysqli->query("INSERT INTO menu VALUES (null, $name, $value)");
  }
  
  public function delItem() {
    $this->mysqli = Database::getInstance();
    $this->mysqli->query("DELETE FROM menu WHERE menu_id = $this->id");
  }
}
?>