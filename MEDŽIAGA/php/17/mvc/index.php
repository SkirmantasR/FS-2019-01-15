<?php
include 'config.php';
function __autoload($classname)
{
  require_once "libraries/" . $classname . ".php";
}

$app = new App();
