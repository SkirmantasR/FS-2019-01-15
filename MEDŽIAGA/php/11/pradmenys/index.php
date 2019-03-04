<?php
require 'Student.php';
$student1 = new Student('Taurius', 'Petraitis', 22, 4, ['Algoritmų sanalizė']);
$student2 = new Student('Žilvinas', 'Vidmantas', 25, 2, ['Operacinės sistemos', 'Funkcinis programavimas']);
$student3 = new Student('Tadas', 'Bulota', 25, 1, ['Taikomoji fizika', 'Dinamika', 'Braižyba']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Pradmenys</title>
  <link rel="stylesheet" href="public/style/css/main.css">
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
            data-toggle="dropdown">Dropdown</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>

  <section>
    <div class="container">
      <h3>Kintamieji</h3>
      <?php
      $a = 7.2;
      $b = 'Labas';
      $c = true;
      $d = [7, 5, 6];
      $people = [
        [
          'name' => 'Jonas',
          'surname' => 'Virkilas',
          'age' => 12
        ],
        [
          'name' => 'Jonas',
          'surname' => 'Kirkilas',
          'age' => 51
        ],
        [
          'name' => 'Stasys',
          'surname' => 'Dirkilas',
          'age' => 22
        ],
        [
          'name' => 'Dzinas',
          'surname' => 'Kirkilas',
          'age' => 52
        ]
      ];
      
      // echo '<pre>';
      // print_r($people);
      // echo '</pre>';
      ?>
      <table class="table table-striped">
        <thead class="thead-dark">
          <tr>
            <?php
            foreach ($people[0] as $key => $value) {
              echo '<th>' . ucfirst($key) . '</th>';
            }
            ?>
          </tr>
        </thead>
        <tbody>
          <?php
          for ($i = 0; $i < count($people); $i++) {
            echo '<tr>';
            foreach ($people[$i] as $value) {
              echo '<td>' . $value . '</td>';
            }
            echo '</tr>';
          }
          ?>
        </tbody>
      </table>

      <hr>
      <h3>Atvaizduojamos kortelės pagal klasės objektus</h3>
      <div class="d-flex justify-content-around  align-items-start">
        <?php
        echo $student1->toCard();
        echo $student2->toCard();
        echo $student3->toCard();
        ?>
      </div>
    </div>
  </section>

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