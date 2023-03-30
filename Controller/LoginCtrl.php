<?php

require_once 'Model/AdminModel.php';
require_once 'View/View.php';
class LoginCtrl {
  public function __construct() {
    $this->admin = new AdminModel();

  }

  public function Login() {
    if(isset($_SESSION['id'])){
      header('Location: index.php');
      $view = new View('Accueil');
      $view->generate();
    } else {
      $view = new View('Login');
      $view->generate();
    }
 
  }

  public function ExecuteLogin() {

    $id = $_POST['id'];
    $password = $_POST['pw'];

    $admin = $this->admin->getAdmin($id);

    // && password_verify($password, $admin['password']
    if(!isset($_SESSION['id'])){
      if($admin != false){
        if(password_verify($password, $admin['password'])){
          $_SESSION['id'] = $admin['idAdmin'];
          $view = new View('Accueil');
          $view->generate();
        } else{
          $errorLogin = 'L\'identifiant ou le mot de passe sont incorrect !';
          $view = new View('Login', $errorLogin);
          $view->generate();
        }
      } else {
        $errorLogin = 'L\'identifiant ou le mot de passe sont incorrect !';
        $view = new View('Login', $errorLogin);
        $view->generate();
      }
    } else{
      header('Location: index.php');
      $view = new View('Accueil');
      $view->generate();
    }
  }

  public function Logout() {
    session_unset();
    session_destroy();
    $view = new View('Accueil');
    $view->generate();
  }
}