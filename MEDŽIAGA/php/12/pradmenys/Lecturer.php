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
    $modulesString = '';
    foreach ($this->modules as $module) {
      $modulesString .= '
        <div>
          <span style="width: 100px; display: inline-block">'.$module->getTitle().'</span>
          <span>'.$module->getCredits().'</span>
        </div>
      ';
    }
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
      <td>{$modulesString}</td>
    </tr>
    ";
    return $result;
  }
}