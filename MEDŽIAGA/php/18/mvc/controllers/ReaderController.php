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
      $nameValidation = new ValidationInput($_POST['name']);
      $nameValidation
        ->empty()
        ->minCapitals(1)
        ->length(3, 16);

      $surnameValidation = new ValidationInput($_POST['surname']);
      $surnameValidation
        ->empty()
        ->minCapitals(1)
        ->length(3, 16);

      $emailValidation = new ValidationInput($_POST['email']);
      $emailValidation
        ->empty()
        ->minCapitals(1)
        ->length(7, 254);

      $phoneValidation = new ValidationInput($_POST['phone']);
      $phoneValidation
        ->empty()
        ->number()
        ->length(8);

      if (!$nameValidation->success() || !$surnameValidation->success() ||
        !$emailValidation->success() || !$phoneValidation->success()) {
        $this->view->args['name'] = $nameValidation->value();
        $this->view->args['surname'] = $surnameValidation->value();
        $this->view->args['email'] = $emailValidation->value();
        $this->view->args['prefix'] = $_POST['prefix'];
        $this->view->args['phone'] = $phoneValidation->value();

        if (!$nameValidation->success()) $this->view->args['nameErrors'] = $nameValidation->getErrors();
        if (!$surnameValidation->success()) $this->view->args['surnameErrors'] = $surnameValidation->getErrors();
        if (!$emailValidation->success()) $this->view->args['emailErrors'] = $emailValidation->getErrors();
        if (!$phoneValidation->success()) $this->view->args['phoneErrors'] = $phoneValidation->getErrors();
      } else {
        $this->model->createReader([
          'name' => $nameValidation->value(),
          'surname' => $surnameValidation->value(),
          'email' => $emailValidation->value(),
          'phone' => $_POST['prefix'] . $phoneValidation->value()
        ]);
      }
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