<h1>Catalog</h1>
<?php
if (isset($this->args['subpage'])) {
  echo '<h3>' . ucfirst($this->args['subpage']) . '</h3>';
}
if (isset($this->args['books'])) {
  include 'table_of_books.php';
}