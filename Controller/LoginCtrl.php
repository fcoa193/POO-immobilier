<?php
require_once 'View/View.php';

class LoginCtrl {
  // Affiche les détails sur un billet
  public function Login() {
    $view = new View('Login');
    $view->generate();
  }
}