<?php

require_once 'Model/Model.php';

class PropertyModel extends Model {
  // Renvoie la liste des billets du blog
  public function getProperties() {
    $ville = $_POST['city'];
    $locOuAchat = $_POST['louer-acheter'];
    $appartement = $_POST['appartement'];
    $maison = $_POST['maison'];
    $prix = $_POST['maxprice'];
    $superficie = $_POST['superficie'];
    $pieces = $_POST['parts'];
    $chambres = $_POST['rooms'];

    $sql = "SELECT prix, intitule, idProperty FROM Property WHERE etat = '$locOuAchat' AND superficie >= '$superficie' AND pieces >= '$pieces' AND chambres >= '$chambres'";

    $params = array();
    
     // Clause Ville
     if($ville != null) {
      $sql .= "AND ville=?";
      $params[] = $ville;
    }
   
    // Clause prix
    if($prix != 3000 && $locOuAchat != 'Location') {
      $sql .= "AND prix <= ?";
      $params[] = $prix;
    }
     if($prix != 1000000 && $locOuAchat != 'Achat'){
      $sql .= "AND prix <= ?";
      $params[] = $prix;
    } 

    // Clause Type
    if($appartement === "on" && $maison != "on" ) {
      $sql .= "AND type=?";
      $params[] = 'Appartement';
    }
    if($maison === "on" && $appartement != "on" ) {
      $sql .= "AND type=?";
      $params[] = 'Maison';
    }

     $properties = $this->executeRequest($sql, $params)->fetchAll(PDO::FETCH_ASSOC);
     return $properties;
  }


  // Renvoie les informations sur un billet
  public function getProperty($idProperty) {
    $sql = "SELECT * FROM Property WHERE idProperty=?";
    $property = $this->executeRequest($sql, array($idProperty));
    if ($property->rowCount() == 1)
      return $property->fetch();  // Accès à la première ligne de résultat
    else
      throw new Exception("Property introuvable");
    }
}