<?php

class CatalogController extends Controller
{
  public function __construct($name)
  {
    parent::__construct($name);
  }

  public function fantasy()
  {
    $this->view->args['subpage'] = 'fantasy';
    $this->view->args['books'] = [
      [
        'title' => 'Vienas Du Trys',
        'author' => 'Skaičiuoklis Kvadratas',
        'year'=> 2005,
        'category' => 'fantasy'
      ],
      [
        'title' => 'Sapnų vovierė',
        'author' => 'Miško magnatas',
        'year'=> 2012,
        'category' => 'fantasy'
      ],
      [
        'title' => 'Saulė sustrigo',
        'author' => 'Sraigė Šliaužytė',
        'year'=> 2002,
        'category' => 'fantasy'
      ],
    ];
    $this->index();
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