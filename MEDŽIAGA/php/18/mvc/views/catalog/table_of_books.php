<?php
if (count($this->args['books']) > 0) {
  echo '<h1>' . ucfirst($this->args['header']) . '</h1>';
?>
<table class="table table-striped">
  <thead class="bg-brown
  ">
    <tr>
      <th>Title</th>
      <th>Author</th>
      <th>Year</th>
      <th>Genre</th>
    </tr>
  </thead>
  <tbody>
<?php
  foreach ($this->args['books'] as $bookArray) {
?>
    <tr>
      <td><?php echo $bookArray['title'] ?></td>
      <td><?php echo $bookArray['author'] ?></td>
      <td><?php echo $bookArray['year'] ?></td>
      <td><?php echo $bookArray['genre'] ?></td>
    </tr>
<?php 
  } 
?>
  </tbody>
</table>
<?php
}else{
  echo '<h1>' . ucfirst($this->args['header']) . '</h1>';
}