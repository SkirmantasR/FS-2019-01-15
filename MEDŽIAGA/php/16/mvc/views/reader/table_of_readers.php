<?php
if (count($this->args['readers']) > 0) {
  echo '<h1>' . ucfirst($this->args['header']) . '</h1>';
?>
<table class="table table-striped">
  <thead class="bg-brown
  ">
    <tr>
      <th>Name</th>
      <th>surname</th>
      <th>Email</th>
      <th>Phone</th>
    </tr>
  </thead>
  <tbody>
<?php
  foreach ($this->args['readers'] as $reader) {
?>
    <tr>
      <td><?php echo $reader['name'] ?></td>
      <td><?php echo $reader['surname'] ?></td>
      <td><?php echo $reader['email'] ?></td>
      <td><?php echo $reader['phone'] ?></td>
    </tr>
<?php 
  } 
?>
  </tbody>
</table>
<?php
}else{
  echo '<h1>There are no readers at the moment ;)</h1>';
}