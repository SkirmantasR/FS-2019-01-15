<?php 

class LoginModel extends Model
{
  public function __construct()
  {
    parent::__construct();
  }

  public function login($data)
  {




    $query = "SELECT u.id, u.role, r.name, r.surname, r.email, r.phone 
                FROM mvc.`user` as u
           LEFT JOIN mvc.`reader` as r
                  ON r.id = u.reader
               WHERE u.login = :user AND u.pass = :pass;";

    $pdoStatement = $this->db->prepare($query);
    $pdoStatement->execute([
      ':user' => $data['user'],
      ':pass' => $data['pass']
    ]);
    $result = ($pdoStatement->fetchAll(PDO::FETCH_ASSOC));
    return (count($result) > 0) ? $result : false;
    // return $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
  }

}