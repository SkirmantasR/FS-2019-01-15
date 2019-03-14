<?php

class App
{
  private $controller;

  public function __construct()
  {
    $url = isset($_GET['url'])? explode('/', $_GET['url']) : ['home'];
    $page = $url[0];
    $method = $url[1] ?? null; // Nustato jei egzistuoja metodas

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
