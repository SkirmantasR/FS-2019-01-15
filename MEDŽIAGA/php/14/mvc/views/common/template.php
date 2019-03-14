<?php
require "views/common/head.php";
require "views/common/navbar.php";
echo '<div class="container">';
  require "views/$this->name/index.php";
echo '</div>';
require "views/common/footer.php";