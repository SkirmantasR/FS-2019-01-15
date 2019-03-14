<?php

class Controller
{
  protected $view;
  protected $model;

  protected function __construct($name) {
    $pathToView = "views/$name/index.php";
    if(file_exists($pathToView)){
      $this->view = new View($name);
    }
  }

  public function index(){
    $this->view->render();
  }
}
