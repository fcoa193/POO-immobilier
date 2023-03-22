<?php
// require_once 'PropertyCtrl.php';
require_once 'Controller/AccueilCtrl.php';
// require_once 'AuthCtrl.php';
// require_once 'ProduitCtrl.php';
// require_once 'ResultatCtrl.php';

require_once 'View/View.php';
class Router {
    private $AccueilCtrl;
    // private $AuthCtrl;
    // private $ProduitCtrl;
    // private $ResultatCtrl;
    // private $PropertyCtrl;
    
    public function __construct() {
      $this->AccueilCtrl = new AccueilCtrl();
    //   $this->AuthCtrl = new AuthCtrl();
    //   $this->ProduitCtrl = new ProduitCtrl();
    //   $this->ResultatCtrl = new ResultatCtrl();
    //   $this->PropertyCtrl = new PropertyCtrl();
    }
    
    // Traite une requête entrante
    public function routerRequest() {
 
        try {
            if (isset($_GET['action'])) {
                
                if ($_GET['action'] == 'Accueil') {
                    $this->AccueilCtrl->Accueil();
          
                } else
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
    // private function error($msgErreur) {
    //     $vue = new Vue("Error");
    //     $vue->generate(array('msgErreur' => $msgErreur));
    // }
}


