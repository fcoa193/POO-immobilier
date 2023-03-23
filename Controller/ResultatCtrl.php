<?php
require_once 'View/View.php';

class ResultatCtrl {
  // Affiche les détails sur un billet
  public function Resultat() {
    $view = new View('Resultat');
    $view->generate();
  }
}