<?php

class Controller
{
  protected $view;
  protected $model;

  protected function __construct($name)
  {

    $pathToView = "views/$name/index.php";
    if (file_exists($pathToView)) {
      $this->view = new View($name);
    }

    $pathToModel = "models/" . ucfirst($name) . "Model.php";
    if (file_exists($pathToModel)) {
      include $pathToModel;
      $modelName = ucfirst($name) . "Model";
      $this->model = new $modelName();
    }
    Session::init();
  }

  public function index()
  {
    $this->view->render();
  }
}
