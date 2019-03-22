<?php

class Database extends PDO
{
  public function __construct()
  {
    try {
      parent::__construct("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USER, DB_PASS);
      $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
  }
}