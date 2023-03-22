<?php

require_once 'Model/PropertyModel.php';
require_once 'Model/PicsModel.php';
require_once 'View/View.php';

class AccueilCtrl {
  private $property;
  private $pics;


  public function __construct() {
    $this->property = new PropertyModel();
    $this->pics = new PicsModel();
  }

  // Affiche les détails sur un billet
  public function Accueil($idProperty) {
    $property = $this->property->getProperty($idProperty);
    $pics = $this->pics->getPics($idProperty);
    $vue = new Vue("Produit");
    $vue = new Vue("Accueil");

    $view->generer(array());
  }
}