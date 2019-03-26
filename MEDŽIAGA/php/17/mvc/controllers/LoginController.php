<?php

class LoginController extends Controller
{
  public function __construct($name)
  {
    parent::__construct($name);
  }

  public function index()
  {
    $this->view->args['form'] = 'login';
    parent::index();
  }

  public function login()
  {
    if (isset($_POST, $_POST['login'])) {
      $data = [
        'user' => $_POST['user'],
        'pass' => $_POST['pass']
      ];
      // TODO: validation
      $loginResult = $this->model->login($data);
      if ($loginResult != false) {
        // Pavyko prisijungti
        var_dump($loginResult);
      } else {
        // nelab  ai pavyko prisijungti, bičiuli
        // TODO:  pranešimas apie blogą prisijungimą
        header('Location: ' . ROOT . 'login');
      }

    } else {
      header('Location: ' . ROOT . 'login');
    }
  }


  public function logout()
  {

  }

  public function register()
  {
    $this->view->args['form'] = 'register';
    parent::index();
  }

  public function forgot()
  {
    $this->view->args['form'] = 'forgot';
    parent::index();
  }
}