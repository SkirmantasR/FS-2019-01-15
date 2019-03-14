<?php
class University
{
  private $title;
  private $members = [];

  public function __construct($title)
  {
    $this->title = $title;
  }
//  įeinamojo parametro sugriežtinimas, Leistini tik tie objektai kurie yra ARBA pAVELDI
  public function addMember(UniversityMember $member)
  {
    array_push($this->members, $member);
  }

  public function toTable()
  {
    $result = '
    <table class="table table-striped text-center">
      <thead class="thead thead-dark">
        <tr>
          <th>Name</th>
          <th>Surname</th>
          <th>Age</th>
          <th>Degree</th>
          <th>Salary</th>
          <th>Course</th>
          <th>Average</th>
          <th>Email</th>
          <th>Modules</th>
        </tr>
      </thead>
      <tbody>';
    foreach ($this->members as $member) {
      $result .= $member->toRow();
    }
    $result .= '  
      </tbody>
    </table>
    ';
    return $result;
  }
}