<?php

require_once 'Model/PropertyModel.php';
require_once 'Model/PicsModel.php';
require_once 'View/View.php';

class PropertyCtrl {


  

  private $property;
  private $pics;
  public function __construct() {
    $this->property = new PropertyModel();
    $this->pics = new PicsModel();
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
          $photo1 = $_POST['photo1'];
          
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
          var_dump($_FILES); 
        // var_dump($_POST);    
        $description = $_POST['description'];

        $result = $this->property->saveProperty($ville, $adresse, $code_postal, $etat, $type, $intitule, $prix, $etage, $superficie, $pieces, $chambres, $meuble, $piscine, $balcon, $jardin, $garage, $cave, $ascenseur, $description);

        if($result == true || $result == 1){
          $targetDir = "Tools/Uploads/";
                  
          // Vérifiez si le répertoire d'upload existe sinon le créer

          if(!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true);
          }

          $fileName = $_FILES["photo1"]["name"];
          $fileExtension = strrchr($file_name, ".");
          $fileTmpName = $_FILES['fichier']['tmp_name'];
          $fileDestination = "Tools/Uploads/" . $fileName;
          move_uploaded_file($_FILES['photo1']['tmp_name'],"Tools/Uploads/" . $fileName);
          if(move_uploaded_file($fileTmpName, $fileDestination)) {
            echo 'success !';
            $data = $this->property->getIdProperty($ville, $adresse, $code_postal, $etat, $type, $intitule, $prix, $etage, $superficie, $pieces, $chambres, $meuble, $piscine, $balcon, $jardin, $garage, $cave, $ascenseur, $description);
            $idProperty = $data['idProperty'];
            $result = $this->pics->savePics($fileName, $idProperty);
          } else{
            echo 'fail';
          }
         


         

         
          
  

          if($result == true || $result == 1){
            $properties = $this->property->getPropertiesBack();
            $view = new View("Resultat");
            $view->generate(array('property' => $properties));
          }
        } 
      }
    else {
      echo "<p> Une erreur est survenue</p>";
    }
  }

    // créer une propriété
    
    public function AddProperty() {
      $view = new View('AddProperty');
      $view->generate($property);
    }



  // private $property;
//   private $pics;


//   public function __construct() {
//     $this->property = new PropertyModel();

//   }

//   // Affiche les détails sur un billet
//   public function Property($idProperty) {
//     $property = $this->property->getProperty($idProperty);
//     $pics = $this->pics->getPics($idProperty);
//     $view = new View("Property");
//     $view->generate();
//   }



    // // Mettre à jour une propriété
    public function EditProperty(){ 
           $view = new View('EditProperty');
            $view->generate();
    //     $idProperty = $_GET['idProperty'];
  
    //     if (!empty($_POST)) {
    // // Récupérer les informations de l'employe à partir du formulaire
    //         $adresse = $_POST['adresse'];
    //         $code_postal = $_POST['code_postal'];
    //         $ville = $_POST['ville'];
    //         $etat = $_POST['etat'];
    //         $type = $_POST['type'];
    //         $prix = $_POST['prix'];
    //         $etage = $_POST['etage'];
    //         $superficie = $_POST['superficie'];
    //         $pieces = $_POST['pieces'];
    //         $chambres = $_POST['chambres'];
    //         $meuble = $_POST['meuble'];
    //         $piscine = $_POST['piscine'];
    //         $balcon = $_POST['balcon'];
    //         $jardin = $_POST['jardin'];
    //         $garage = $_POST['garage'];
    //         $cave = $_POST['cave'];
    //         $ascenseur = $_POST['ascenseur'];
    //         $description = $_POST['description'];

    //         $result = $this->property->updateProperty($adresse, $code_postal, $ville, $etat, $type, $prix, $etage, $superficie, $pieces, $chambres, $meuble, $piscine, $balcon, $jardin, $garage, $cave, $ascenseur, $description);


    //         $property = $this->property->getProperty($idProperty);
    //         $view = new View('EditProperty');
    //         $view->generate();
    //     }
    //     else{
    //         echo "<p> Une erreur est survenue</p>";
    //     }
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