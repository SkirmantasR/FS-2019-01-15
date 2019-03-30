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

  public function createReader($data){

    $query = "INSERT INTO `reader`( `name`, `surname`, `email`, `phone`) VALUES 
      (:name, :surname, :email, :phone);";
    $pdoStatement = $this->db->prepare($query);
    $pdoStatement->execute([
      ':name' => $data['name'],
      ':surname' => $data['surname'],
      ':email' => $data['email'],
      ':phone' => $data['phone']
    ]);
  }
}