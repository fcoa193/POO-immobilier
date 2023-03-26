<?php
require_once 'Controller/AccueilCtrl.php';
require_once 'Controller/ResultatCtrl.php';
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
      $this->ResultatCtrl = new ResultatCtrl();
      $this->PropertyCtrl = new PropertyCtrl();
      $this->LoginCtrl = new LoginCtrl();
    }
    
    // Traite une requête entrante
    public function routerRequest() {
       
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

                else if($_GET['action'] == 'AddProperty'){
                    $this->PropertyCtrl->AddProperty();
                }

                else if($_GET['action'] == 'EditProperty'){
                    $this->PropertyCtrl->EditProperty();
                }

                else if($_GET['action'] == ''){
                    
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