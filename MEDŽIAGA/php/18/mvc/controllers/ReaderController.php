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

  public function createReader()
  {
    if (!empty($_POST) && isset($_POST['createReader'])) {
      // TODO: validation
      if(!$nameValidation = new ValidationInput($_POST['name'])
        .minCapitals(1)
        .length(3, 16).success()
      ){
        // nutraukiu vykdyma ir i6metu i klaidos puslap5
      }
        
      
      $data = [
        'name' => $_POST['name'],
        'surname' => $_POST['surname'],
        'email' => $_POST['email'],
        'phone' => $_POST['phone']
      ];

      $this->index();
    } else {
      header('Location: ' . ROOT . 'home');
    }
  }

  public function index()
  {
    $this->view->args['header'] = 'All readers';
    $this->view->args['readers'] = $this->model->getReaders();
    parent::index();
  }
}