<?php
require_once 'View/View.php';

class AccueilCtrl {
  // Affiche les détails sur un billet
  public function Accueil() {
    $view = new View('Accueil');
    $view->generate();
  }
}