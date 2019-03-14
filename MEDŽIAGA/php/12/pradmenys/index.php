<?php
include 'Module.php';
include 'UniversityMember.php'; 
include 'University.php';
include 'Lecturer.php';
include 'Student.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Four Pillars of OOP</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <?php
      // Kuriami objektai
    $lecturer = new Lecturer('Giedrius', 'Kirvis', 38, 1280, 'Doctor');
    $student = new Student('Saulius', 'Studentauskas', 22, 2, 7.2);
    $university = new University('Kauno Technologijos Universitetas');

    $university->addMember($lecturer);
    $university->addMember($student);

    $student->setAge(39);
    $student->addModule('Pjovininkystė', 6);
    $student->addModule('Pjovininkyst2', 6);
    $student->addModule('Pjovininkyst3', 6);
    $student->addModule('Pjovininkyst4', 6);
    $student->addModule('Pjovininkyst4', 3);
    $student->addModule('Pjovininkyst5', 3);
    
    $lecturer->addModule('Pjovininkyst5', 3);
    // var_dump($student->name);  Negalima prieiga prie private kintamojo
      // var_dump($student->getName());

      // <pre> - Palieka tarpus ir eilučių nukėlimus kaip HTML/PHP faile
      // echo '<pre>';
      // var_dump($lecturer); // var_dump() - atspausdina objektą 
      // var_dump($student);
      // var_dump($university);
      // echo '</pre>';
    echo $university->toTable();
    ?>
    

  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
</body>

</html>