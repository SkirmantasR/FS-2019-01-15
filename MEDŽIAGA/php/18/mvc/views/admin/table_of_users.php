<?php
if (count($this->args['users']) > 0) {
  echo '<h1>' . ucfirst($this->args['header']) . '</h1>';
  ?>
<table class="table table-striped">
  <thead class="bg-brown">
    <tr>
      <th>Login</th>
      <th>Role</th>
      <th>Name</th>
      <th>Surname</th>
    </tr>
  </thead>
  <tbody>
<?php
foreach ($this->args['users'] as $reader) {
  ?>
    <tr>
      <td><?php echo $reader['login'] ?></td>
      <td><?php echo $reader['role'] ?></td>
      <td><?php echo $reader['name']?? '---' ?></td>
      <td><?php echo $reader['surname']?? '---' ?></td>
    </tr>
<?php 
}
?>
  </tbody>
</table>
<?php

} else {
  echo '<h1>There are no users at the moment ;)</h1>';
}