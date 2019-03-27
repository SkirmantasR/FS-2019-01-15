<?php

class ReaderController extends Controller
{
  public function __construct($name)
  {
    parent::__construct($name);
    if (!Session::get('loggedIn') || Session::get('role') != 'moderator') {
      header('Location: ' . ROOT . 'login');
    }

  }

  public function index(){
    $this->view->args['header'] = 'All readers';
    $this->view->args['readers'] = $this->model->getReaders();
    parent::index();
  }
}