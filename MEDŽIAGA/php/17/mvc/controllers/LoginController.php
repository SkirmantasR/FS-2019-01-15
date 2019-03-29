<?php

class LoginController extends Controller
{
  public function __construct($name)
  {
    parent::__construct($name);
  }
  
  public function index()
  {
    if (Session::get('loggedIn')) header('Location: ' . ROOT . 'home');
    $this->view->args['form'] = 'login';
    parent::index();
  }

  public function login()
  {
    if (Session::get('loggedIn')) header('Location: ' . ROOT . 'home');
    if (isset($_POST, $_POST['login'])) {
      $data = [
        'user' => $_POST['user'],
        'pass' => $_POST['pass']
      ];
      // TODO: validation
      $loginResult = $this->model->login($data);
      if ($loginResult != false) {
        Session::set('id', $loginResult['id']);
        Session::set('role', $loginResult['role']);
        Session::set('loggedIn', true);
        if ($loginResult['role'] != 'reader') {
          Session::set('name', $loginResult['name']);
          Session::set('surname', $loginResult['surname']);
          Session::set('email', $loginResult['email']);
          Session::set('phone', $loginResult['phone']);
        }
        header('Location: ' . ROOT . 'home');
      } else {
        // nelabai pavyko prisijungti, bičiuli
        // TODO:  pranešimas apie blogą prisijungimą
        header('Location: ' . ROOT . 'login');
      }

    } else {
      header('Location: ' . ROOT . 'login');
    }
  }


  public function logout()
  {
    Session::redirectToLogin();
  }

  public function register()
  {
    if (Session::get('loggedIn')) header('Location: ' . ROOT . 'home');
    $this->view->args['form'] = 'register';
    parent::index();
  }

  public function forgot()
  {
    if (Session::get('loggedIn')) header('Location: ' . ROOT . 'home');
    $this->view->args['form'] = 'forgot';
    parent::index();
  }
}