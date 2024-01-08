<?php
class Database
{

  private $dbname = CONFIG['db'];
  private $user = CONFIG['db_user'];
  private $pass = CONFIG['db_password'];

  private static $instance = null;

  public $dbh;

  private function __construct()
  {
    try {
      $this->dbh = new PDO($this->dbname, $this->user, $this->pass);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public static function getInstance()
  {
    if (!self::$instance) {
      self::$instance = new self();
    }

    return self::$instance;
  }
  public function getConnection()
  {
    return $this->dbh;
  }
  
}