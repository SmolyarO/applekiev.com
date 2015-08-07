<?php
class Database {
  private $data;
  private $config;
  private static $instance;
  
  private function __construct() {
    self::getConfig();
    self::connect();
  }
  
  private function getConfig() {
    $this->config = parse_ini_file('core/config.ini');
  }
  
  private function connect() {
    $this->data = new mysqli(
      $this->config["servername"],
      $this->config["username"],
      $this->config["password"],
      $this->config["database"],
      $this->config["port"]
    );
    if ($this->data->connect_error) {
      throw new Exception('Connection error: (' . $this->data->connect_errno . ') ' . $this->data->connect_error);
    }
    return $this->data;
  }
  
  public static function getInstance() {
    if(!(self::$instance instanceof self)) {
      self::$instance = new self();
    }
    return self::$instance;
  }
  
  public function query($sql) {
    if (!$this->data) {
      throw new Exception("Could not connect for query");
    }
    return $this->data->query($sql);
  }
  
  public function getInsertId() {
    return $this->data->inset_id;
  }
  
}
?>