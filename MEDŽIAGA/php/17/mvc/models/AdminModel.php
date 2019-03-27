<?php 

class AdminModel extends Model
{
  public function __construct()
  {
    parent::__construct();
  }

  public function getUsers()
  {
    $query = 'SELECT u.id, u.login, u.role, r.name, r.surname 
                FROM `user` as u 
           LEFT JOIN `reader` as r
                  ON u.reader = r.id';
    $pdoStatement = $this->db->prepare($query);
    $pdoStatement->execute();

    return $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
  }
}