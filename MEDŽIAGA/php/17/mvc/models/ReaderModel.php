<?php 

class ReaderModel extends Model
{
  public function __construct()
  {
    parent::__construct();
    
  }

  public function getReaders()
  {
    $query = 'SELECT * FROM `reader`';
    $pdoStatement = $this->db->prepare($query);
    $pdoStatement->execute();

    return $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
  }
}