<?php 
//   Studentas  YRA  UniversitetoNarys
class Student extends UniversityMember
{
  private $course;
  private $average;

  public function __construct($name, $surname, $age, $course, $average)
  {
    parent::__construct($name, $surname, $age);
    $this->course = $course;
    $this->average = $average;
  }

  // Getters
  public function getCourse()
  {
    return $this->course;
  }

  public function getAverage()
  {
    return $this->average;
  }

  // Setters
  public function setCourse($course)
  {
    $this->course = $course;
  }

  public function setAverage($average)
  {
    $this->average = $average;
  }

  public function toRow(){
    $result = "
    <tr>
      <td>{$this->name}</td>
      <td>{$this->surname}</td>
      <td>{$this->age}</td>
      <td>---</td>
      <td>---</td>
      <td>{$this->course}</td>
      <td>{$this->average}</td>
    </tr>
    ";
    return $result;
  }
}