<?php 
//   Destytojas  YRA  UniversitetoNarys
class Lecturer extends UniversityMember
{
  private $salary;
  private $degree;

  public function __construct($name, $surname, $age, $salary, $degree)
  {
    parent::__construct($name, $surname, $age);
    $this->salary = $salary;
    $this->degree = $degree;
  }

  // Getters
  public function getSalary()
  {
    return $this->salary;
  }

  public function getDegree()
  {
    return $this->degree;
  }

  // Setters
  public function setSalary($salary)
  {
    $this->salary = $salary;
  }

  public function setDegree($degree)
  {
    $this->degree = $degree;
  }
  
  public function toRow(){ // Implementacija - realizavimas
    $result = "
    <tr>
      <td>{$this->name}</td>
      <td>{$this->surname}</td>
      <td>{$this->age}</td>
      <td>{$this->degree}</td>
      <td>{$this->salary}</td>
      <td>---</td>
      <td>---</td>
      <td>{$this->mailBox}</td>
    </tr>
    ";
    return $result;
  }
}