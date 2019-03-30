<?php 

class Session
{

  public static function init()
  {
    @session_start();
  }

  public static function set($name, $value)
  {
    $_SESSION[$name] = $value;
  }

  public static function get($name)
  {
    return $_SESSION[$name] ?? false;
  }

  public static function destroy()
  {
    session_destroy();
  }

  public static function redirectToLogin()
  {
    Session::destroy();
    header('Location: ' . ROOT . 'login');
    exit();
  }
}