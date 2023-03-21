<?php

require_once 'Modele/Model.php';
require_once 'Vue/Vue.php';

class ControllerHome {

  private $property;

  public function __construct() {
    $this->property = new Property();
  }

  // Affiche la liste de tous les billets du blog
  public function accueil() {
    $properties = $this->property->getProperties();
    $vue = new Vue("Accueil");
    $vue->generer(array('properties' => $properties));
  }
}