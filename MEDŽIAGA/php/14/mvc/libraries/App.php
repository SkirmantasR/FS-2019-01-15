<?php

class App
{
  private $controller;

  public function __construct()
  {
    if (isset($_GET['url'])) {
      $page = $_GET['url'];
    } else {
      $page = 'home';
    }

    $this->controller = $this->createController($page);
    $this->controller->index();
  }

  private function createController($page)
  {
    $pathToController = 'controllers/' . ucfirst($page) . 'Controller.php';
    if (file_exists($pathToController)) {
      require $pathToController;
      $controllerName = ucfirst($page) . 'Controller'; // pvz.: HomeController
      return new $controllerName($page);
    }
    require 'controllers/MistakeController.php';
    return new MistakeController($page);
  }
}
