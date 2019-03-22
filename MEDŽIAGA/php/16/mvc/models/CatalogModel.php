<?php 

class CatalogModel extends Model{
  public function __construct() {
    parent::__construct();

  }
  public function getBooks(){
    $query = 'SELECT * FROM `book`';
    $pdoStatement = $this->db->prepare($query);
    $pdoStatement->execute();
    var_dump($pdoStatement->fetchAll(PDO::FETCH_ASSOC));
  }
}