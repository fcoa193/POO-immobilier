<?php
require_once 'View/View.php';

class ResultatCtrl {
  // Affiche les détails sur un billet
  public function Resultat() {
    $view = new View('Resultat');
    $view->generate();
  }


  // private $photos;
    
  // public function __construct() {
  //     $this->photos = new Photos();
  // }

      // // Supprimer une photo
    // public function deletePhoto() {
    //     $idPhotos = $_GET['idPhotos'];

    //     $result = $this->photos->deletePhoto($idPhotos);
    // }

    // // Ajouter une photo
    // public function addPhoto(){

    //   $result = $this->photos->setPic();
    // }
}