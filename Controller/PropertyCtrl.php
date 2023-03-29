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
      // $view = new View('AddProperty');
      // $view->generate(array('property' => $property));
    // }

      public function ExecuteAddProperty(){
        if (!empty($_POST)) {
          // Récupérer les informations de la propriété à partir du formulaire
          $ville = $_POST['ville'];
          $adresse = $_POST['adresse'];
          $code_postal = $_POST['code_postal'];
          $etat = $_POST['etat'];
          $type = $_POST['type'];
          $intitule = $_POST['intitule'];
          $prix = $_POST['prix'];
          $etage = $_POST['etage'];
          $superficie = $_POST['superficie'];
          $pieces = $_POST['pieces'];
          $chambres = $_POST['chambres'];
          $photos = $_POST['photos'];
          if($_POST['meuble'] == "on"){
            $meuble = 1;
          }else{
            $meuble = 0;
          }
          if($_POST['piscine'] == "on"){
            $piscine = 1;
          }else{
            $piscine = 0;
          }
          
          if($_POST['balcon'] == "on"){
            $balcon = 1;
          }else{
            $balcon = 0;
          }
          if($_POST['jardin'] == "on"){
            $jardin = 1;
          }else{
            $jardin = 0;
          }
          if($_POST['garage'] == "on"){
            $garage = 1;
          }else{
            $garage = 0;
          }
          if($_POST['cave'] == "on"){
            $cave = 1;
          }else{
            $cave = 0;
          }
          if($_POST['ascenseur'] == "on"){
            $ascenseur = 1;
          }else{
            $ascenseur = 0;
          }
          $description = $_POST['description'];

          var_dump($_POST);
          
        $result = $this->property->saveProperty($ville, $adresse, $code_postal, $etat, $type, $intitule, $prix, $etage, $superficie, $pieces, $chambres, $photos, $meuble, $piscine, $balcon, $jardin, $garage, $cave, $ascenseur, $description
      );

          $view = new View('Resultat');
          $view->generate();
        
        }
      else {
          echo "<p> Une erreur est survenue</p>";
      }
  }



    // Montrer le formulaire 
    public function AddProperty() {
      $view = new View('AddProperty');
      $view->generate();
    }



    // // Montrer le formulaire
    public function EditProperty(){ 
           $view = new View('EditProperty');
            $view->generate();
    }


    public function ExecuteEditProperty(){
        if (!empty($_POST)) {
    // Récupérer les informations de l'employe à partir du formulaire
            $idProperty = $_GET['id'];
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
            if($_POST['meuble'] == "on"){
              $meuble = 1;
            }else{
              $meuble = 0;
            }
            if($_POST['piscine'] == "on"){
              $piscine = 1;
            }else{
              $piscine = 0;
            }
            if($_POST['balcon'] == "on"){
              $balcon = 1;
            }else{
              $balcon = 0;
            }
            if($_POST['jardin'] == "on"){
              $jardin = 1;
            }else{
              $jardin = 0;
            }
            if($_POST['garage'] == "on"){
              $garage = 1;
            }else{
              $garage = 0;
            }
            if($_POST['cave'] == "on"){
              $cave = 1;
            }else{
              $cave = 0;
            }
            if($_POST['ascenseur'] == "on"){
              $ascenseur = 1;
            }else{
              $ascenseur = 0;
            }
            $description = $_POST['description'];


            var_dump($_POST);

            $result = $this->property->updateProperty($idProperty, $adresse, $code_postal, $ville, $etat, $type, $intitule, $prix, $etage, $superficie, $pieces, $chambres,$photos, $meuble, $piscine, $balcon, $jardin, $garage, $cave, $ascenseur, $description);
            $view = new View('Resultat');
            $view->generate();
            return $result;
        }
        else{
            echo "<p> Une erreur est survenue</p>";
        }
  }


    // Supprimer une propriété
    public function DeleteProperty() {
      $idProperty = $_GET['id'];
      $result = $this->property->deleteProperty($idProperty);
      
      if($result == true || $result == 1){
        $properties = $this->property->getPropertiesBack();
        $view = new View("Resultat");
        $view->generate(array('property' => $properties));
      }


  }
}