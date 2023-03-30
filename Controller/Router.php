<?php
require_once 'Controller/AccueilCtrl.php';
require_once 'Controller/PropertyCtrl.php';
require_once 'Controller/LoginCtrl.php';

require_once 'View/View.php';

class Router {
    private $AccueilCtrl;
    private $ResultatCtrl;
    private $PropertyCtrl;
    private $LoginCtrl;

    public function __construct() {
      $this->AccueilCtrl = new AccueilCtrl();
      $this->PropertyCtrl = new PropertyCtrl();
      $this->LoginCtrl = new LoginCtrl();
    }
    
    // Traite une requête entrante
    public function routerRequest() {
        session_start();
        try {
            if (isset($_GET['action'])) {
                if($_GET['action'] == 'Resultat'){
                    $this->PropertyCtrl->Properties();
                }
                else if($_GET['action'] == 'Property'){
                    $this->PropertyCtrl->Property();
                }
                else if($_GET['action'] == 'Login'){
                    $this->LoginCtrl->Login();
                }
                else if($_GET['action'] == 'Accueil'){
                    $this->LoginCtrl->ExecuteLogin();
                }
                else if($_GET['action'] == 'AddProperty'){
                    $this->PropertyCtrl->AddProperty();
                }
                elseif ($_GET['action'] == 'ExecuteAddProperty') {
                    $this->PropertyCtrl->ExecuteAddProperty();
                }
                else if($_GET['action'] == 'EditProperty'){
                    $this->PropertyCtrl->EditProperty();
                }
                elseif ($_GET['action'] == 'ExecuteEditProperty') {
                    $this->PropertyCtrl->ExecuteEditProperty();
                }
                else if($_GET['action'] == 'DeleteProperty'){
                    $this->PropertyCtrl->DeleteProperty();
                }
                else if($_GET['action'] == 'Logout'){
                    $this->LoginCtrl->Logout();
                }
                else
                    throw new Exception("Action non valide");
                }          
            else {
                $this->AccueilCtrl->Accueil();
            }
        }
        catch (Exception $e) {
            error($e->getMessage());
      }

    }
    
    // Affiche une erreur
    private function error($msgErreur) {
        $vue = new Vue("Error");
        $vue->generate(array('msgErreur' => $msgErreur));
    }
}