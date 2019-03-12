<?php
require "views/common/head.php";
require "views/common/navbar.php";
echo '<div class="container">';
  require "views/$page/index.php";
echo '</div>';
require "views/common/footer.php";