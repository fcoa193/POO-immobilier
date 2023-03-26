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

    // // Afficher addproperty
    // public function AddProperty() {
    //   $view = new View('AddProperty');
    //   $view->generate();
    // }

    // créer une propriété
    public function AddProperty() {
        if (!empty($_POST)) {
            // Récupérer les informations de la propriété à partir du formulaire
            $adresse = $_POST['adresse'];
            $code_postal = $_POST['code_postal'];
            $ville = $_POST['ville'];
            $etat = $_POST['etat'];
            $type = $_POST['type'];
            $intitule = $_POST['intitule'];
            $prix = $_POST['prix'];
            $etage = $_POST['etage'];
            $superficie = $_POST['superficie'];
            $pieces = $_POST['pieces'];
            $chambres = $_POST['chambres'];
            $photos = $_POST['photos'];
            $meuble = $_POST['meuble'];
            $piscine = $_POST['piscine'];
            $balcon = $_POST['balcon'];
            $jardin = $_POST['jardin'];
            $garage = $_POST['garage'];
            $cave = $_POST['cave'];
            $ascenseur = $_POST['ascenseur'];
            $description = $_POST['description'];

            $result = $this->property->saveProperty($adresse, $code_postal, $ville, $etat, $type, $intitule, $prix, $etage, $superficie, $pieces, $chambres, $photos, $meuble, $piscine, $balcon, $jardin, $garage, $cave, $ascenseur, $description);

            // $property = $this->property->getProperty();
            
            $vue = new Vue('AddProperty');
            $vue->generate(); 
        }
        else {
            echo "<p> Une erreur est survenue</p>";
        }
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
//     $view->generate();
//   }



    // Mettre à jour une propriété
    public function EditProperty(){ 
        $idProperty = $_GET['id_property'];
        if (!empty($_POST)) {
    // Récupérer les informations de l'employe à partir du formulaire
            $adresse = $_POST['adresse'];
            $code_postal = $_POST['code_postal'];
            $ville = $_POST['ville'];
            $etat = $_POST['etat'];
            $type = $_POST['type'];
            $intitule = $_POST['intitule'];
            $prix = $_POST['prix'];
            $etage = $_POST['etage'];
            $superficie = $_POST['superficie'];
            $pieces = $_POST['pieces'];
            $chambres = $_POST['chambres'];
            $photos = $_POST['photos'];
            $meuble = $_POST['meuble'];
            $piscine = $_POST['piscine'];
            $balcon = $_POST['balcon'];
            $jardin = $_POST['jardin'];
            $garage = $_POST['garage'];
            $cave = $_POST['cave'];
            $ascenseur = $_POST['ascenseur'];
            $description = $_POST['description'];

            $result = $this->property->updateProperty($adresse, $code_postal, $ville, $etat, $type, $intitule, $prix, $etage, $superficie, $pieces, $chambres, $photos, $meuble, $piscine, $balcon, $jardin, $garage, $cave, $ascenseur, $description);


            $property = $this->property->getProperty();
            $vue = new Vue('EditProperty');
            $vue->generate();
        }
        else{
            echo "<p> Une erreur est survenue</p>";
        }
    }


    // Supprimer une propriété
    public function deleteProperty() {
        $idProperty = $_GET['id'];

        $result = $this->property->deleteProperty($idProperty);
    }
}