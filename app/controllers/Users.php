<?php
class Users extends Controller
{
  public function __construct()
  { }

  public function register()
  {
    // Check for POST  
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // Process the form
    } else {
      // Init data
      $data = [
        'name' => '',
        'email' => '',
        'password' => '',
        'password_confirm' => '',
        'name_error' => '',
        'email_error' => '',
        'password_error' => '',
        'password_confirm_error' => ''
      ];

      // Load view
      $this->view('users/register', $data);
    }
  }

  public function login()
  {
    // Check for POST  
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // Process the form
    } else {
      // Init data
      $data = [
        'email' => '',
        'password' => '',
        'email_error' => '',
        'password_error' => '',
      ];

      // Load view
      $this->view('users/login', $data);
    }
  }
}
