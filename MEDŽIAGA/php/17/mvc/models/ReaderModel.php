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
    $genre = func_get_args()[0] ?? null; // Jeigu paduodamas parametras atrinkimui pagal žanrą
    if (isset($genre)) $query .= ' WHERE genre LIKE :genre'; // Papildoma užklausa
    $pdoStatement = $this->db->prepare($query); // Paruošiama užklausa
    if(isset($genre)) $pdoStatement->execute([':genre' => '%'.$genre.'%']); // Patikrinama ir įvykdoma
    else $pdoStatement->execute(); // Įvykdoma

    return $pdoStatement->fetchAll(PDO::FETCH_ASSOC); // Grąžinama su stulpelių vardais
  }
}