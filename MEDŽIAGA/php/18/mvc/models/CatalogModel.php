<?php 

class CatalogModel extends Model
{
  public function __construct()
  {
    parent::__construct();
  }

  public function getBooks()
  {
    $query = 'SELECT * FROM `book`';
    $genre = func_get_args()[0] ?? null; // Jeigu paduodamas parametras atrinkimui pagal žanrą
    if (isset($genre)) $query .= ' WHERE genre LIKE :genre'; // Papildoma užklausa
    $pdoStatement = $this->db->prepare($query); // Paruošiama užklausa
    if(isset($genre)) $pdoStatement->execute([':genre' => '%'.$genre.'%']); // Patikrinama ir įvykdoma
    else $pdoStatement->execute(); // Įvykdoma

    return $pdoStatement->fetchAll(PDO::FETCH_ASSOC); // Grąžinama su stulpelių vardais
  }
}