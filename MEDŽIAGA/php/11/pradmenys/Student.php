<?php 
class Student
{
  private $name;
  private $surname;
  private $age;
  private $course;
  private $modules = [];

  public function __construct($name, $surname, $age, $course, $modules)
  {
    $this->name = $name;
    $this->surname = $surname;
    $this->age = $age;
    $this->course = $course;
    $this->modules = $modules;
  }

  public function toCard(): string
  {
    $result = '
    <div class="card border border-primary">
      <div class="card-body">
        <h5 class="text-center text-primary font-weight-bold h5">'.$this->name .' '.$this->surname.'</h5>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Age: ' . $this->age . '</li>
        <li class="list-group-item">Course: ' . $this->course . '</li>
        <li class="list-group-item text-center text-primary font-weight-bold h5 ">Modules</li>
      </ul>';
    foreach ($this->modules as $module) {
      $result .= '
        <div class="module">' . $module . '</div>';
    }
    $result .= '
    </div>';
    return $result;
  }
}