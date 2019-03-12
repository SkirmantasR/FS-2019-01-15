<?php
include 'config.php';
if(isset($_GET['url']))
{
  $page = $_GET['url'];
}
else
{
  $page = 'home';
}

$pathToPage = "views/$page/index.php";
if(!file_exists($pathToPage))
{
  $page = 'mistake';
}

require "views/common/template.php";

