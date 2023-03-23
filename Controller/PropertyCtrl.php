<?php

require_once 'Model/PropertyModel.php';
require_once 'Model/PicsModel.php';
require_once 'View/View.php';

class PropertyCtrl {


    // Affiche les détails sur un billet
    public function Property() {
      $view = new View('Property');
      $view->generate();
    }





  // private $property;
//   private $pics;


//   public function __construct() {
//     $this->property = new PropertyModel();
//     $this->pics = new PicsModel();
//   }

//   // Affiche les détails sur un billet
//   public function Property($idProperty) {
//     $property = $this->property->getProperty($idProperty);
//     $pics = $this->pics->getPics($idProperty);
//     $view = new View("Property");
//     $view->generer(array('property' => $property, 'pics' => $pics));
//   }
}