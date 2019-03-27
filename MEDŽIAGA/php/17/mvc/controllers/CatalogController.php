<?php

class CatalogController extends Controller
{
  public function __construct($name)
  {
    parent::__construct($name);
    if (!Session::get('loggedIn') || !(Session::get('role') == 'reader' || Session::get('role') == 'librarian')) {
      header('Location: ' . ROOT . 'login');
    }
  }

  public function index()
  {
    $this->view->args['header'] = 'All books';
    $this->view->args['books'] = $this->model->getBooks();
    parent::index();
  }

  public function novels()
  {
    $this->view->args['header'] = 'Novels';
    $this->view->args['books'] = $this->model->getBooks('novel');
    parent::index();
  }

  public function adventure()
  {
    $this->view->args['header'] = 'Adventure';
    $this->view->args['books'] = $this->model->getBooks('adventur');
    parent::index();
  }

  public function war()
  {
    $this->view->args['header'] = 'War';
    $this->view->args['books'] = $this->model->getBooks('war');
    parent::index();
  }

  public function instructional()
  {
    $this->view->args['header'] = 'Instructional';
    $this->view->args['books'] = $this->model->getBooks('instruct');
    parent::index();
  }

  public function stories()
  {
    $this->view->args['header'] = 'Stories';
    $this->view->args['books'] = $this->model->getBooks('stor');
    parent::index();
  }

  public function politics()
  {
    $this->view->args['header'] = 'Politics';
    $this->view->args['books'] = $this->model->getBooks('politic');
    parent::index();
  }
}