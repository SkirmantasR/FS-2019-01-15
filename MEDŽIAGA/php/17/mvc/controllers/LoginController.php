<?php

class LoginController extends Controller{
  public function __construct($name) {
    parent::__construct($name);
  }

  public function index(){
    $this->view->args['form'] = 'login';
    parent::index();
  }

  public function login(){

  }

  
  public function logout(){
    
  }

  public function register(){
    $this->view->args['form'] = 'register';
    parent::index();
  }

  public function forgot(){
    $this->view->args['form'] = 'forgot';
    parent::index();
  }
}