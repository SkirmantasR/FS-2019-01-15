<?php

class CatalogController extends Controller
{
  public function __construct($name)
  {
    parent::__construct($name);
  }

  public function index(){
    $this->view->args['books'] = $this->model->getBooks();
    parent::index();
  }

  public function fantasy()
  {
  }

  public function biography()
  {
  }

  public function scifi()
  {
  }

  public function detectives()
  {
  }

  public function poetry()
  {
  }

  public function science()
  {
  }
}