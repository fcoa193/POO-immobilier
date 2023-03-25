<?php

require_once 'Model/PropertyModel.php';
// require_once 'Model/PicsModel.php';
require_once 'View/View.php';

class PropertyCtrl {


    // public function Property() {
    //   $view = new View('Property');
    //   $view->generate();
    // }

  private $property;

  public function __construct() {
    $this->property = new PropertyModel();
    // $this->pics = new PicsModel();
  }

  public function Properties() {

    $properties = $this->property->getProperties();
    // $pics = $this->pics->getPics();
    $view = new View("Resultat");
    $view->generate(array('property' => $properties 
    // 'pics' => $pics
  ));  
  }
  
  public function Property() {
    $idProperty = $_GET['id'];
    $property = $this->property->getProperty($idProperty);
    // $pics = $this->pics->getPics();
    $view = new View("Property");
    $view->generate( 
      array('property' => $property)
  );
}
}