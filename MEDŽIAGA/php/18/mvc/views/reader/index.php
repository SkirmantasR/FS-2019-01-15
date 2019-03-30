<?php
include 'add_reader_form.php';
if(isset($this->args['testas'])){
  echo '<h1 class="text-danger">'.$this->args['testas'].'</h1>';
}
if (isset($this->args['readers'])) {
  include 'table_of_readers.php';
}