<?php 
// Abstrakti klasį - tai klasių šablonas, kuris negali turėti realizacijos (objekto)
abstract class UniversityMember
{
  protected $name;
  protected $surname;
  protected $age;
  private $mailBox;
  private $modules = [];

  public function __construct($name, $surname, $age)
  {
    $this->name = $name;
    $this->surname = $surname;
    $this->age = $age;
  }

  // Abtraktus metodas priverčia vaikines klases implementuoti metodą
  public abstract function toRow(); // Deklaracija - struktūra, tipas

  // Getters
  public function getName()
  {
    return $this->name;
  }

  public function getSurname()
  {
    return $this->surname;
  }

  public function getAge()
  {
    return $this->age;
  }

  // Setters
  public function setName($name)
  {
    $this->name = $name;
  }

  public function setSurname($surname)
  {
    $this->surname = $surname;
  }

  public function setAge($age)
  {
    $this->age = $age;
  }
  

}