<?php

class Session
{

  private $user_id;
  public $username;
  private $last_login;

  public const MAX_LOGIN_AGE = 60 * 60 * 24;

  public function __construct()
  {
    session_start();
    $this->check_stored_login();
  }

  public function login($user)
  {
    if ($user) {
      // prevents session fixation attacks
      session_regenerate_id();
      $this->user_id = $_SESSION['user_id'] = $user->id;
      $this->username = $_SESSION['username'] = $user->username;
      $this->last_login = $_SESSION['last_login'] = time();
    }
    return true;
  }

  public function is_logged_in()
  {
    return isset($this->user_id) && $this->last_login_is_recent();
  }

  public function logout()
  {
    unset($_SESSION['user_id']);
    unset($_SESSION['username']);
    unset($_SESSION['last_login']);
    unset($this->user_id);
    unset($this->username);
    unset($this->last_login);

    return true;
  }

  private function check_stored_login()
  {
    if (isset($_SESSION['user_id'])) {
      $this->user_id = $_SESSION['user_id'];
      $this->username = $_SESSION['username'];
      $this->last_login = $_SESSION['last_login'];
    }
  }

  private function last_login_is_recent()
  {
    if (!isset($this->last_login)) {
      return false;
    } elseif (($this->last_login + self::MAX_LOGIN_AGE) < time()) {
      return false;
    } else {
      return true;
    }
  }

  public function message($msg = "")
  {
    if (!empty($msg)) {
      // Then this is a "set" msg
      $_SESSION['message'] = $msg;
      return true;
    } else {
      // Then this is a "get" message
      return $_SESSION['message'] ?? '';
    }
  }

  public function clear_message()
  {
    unset($_SESSION['message']);
  }
}
