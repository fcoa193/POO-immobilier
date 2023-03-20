<?php
require_once 'Controller.php';

class Routeur {

    private $controller;
    
    public function __construct() {
      $this->controller = new Controller();
      
    }
    
    // Traite une requête entrante
    public function routerRequete() {
        try {
            if (isset($_GET['action'])) {
                if ($_GET['action'] == 'showAllProperty') {
                    $this->controller->AllProperty();
                }
                else 
                if ($_GET['action'] == 'deleteProperty') {
                    $this->controller->deleteProperty();
                }
                else
                if ($_GET['action'] == 'createProperty') {
                    $this->controller->createProperty();
                }
                else 
                if ($_GET['action'] == 'updateProperty') {
                    $this->controller->updateProperty();
                }
                else
                    throw new Exception("Action non valide");
            }
            else {
                $this->controller->accueil();  // action par défaut
            }
        }
        catch (Exception $e) {
            erreur($e->getMessage());
      }

    }
    
    // Affiche une erreur
    private function erreur($msgErreur) {
        $vue = new Vue("Erreur");
        $vue->generer(array('msgErreur' => $msgErreur));
    }
}


