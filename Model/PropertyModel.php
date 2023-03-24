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


    // echo $ville . '<br>';
    // echo $locOuAchat . '<br>';
    // echo $appartement . '<br>';
    // echo $maison . '<br>';
    // echo $prix . '<br>';
    // echo $superficie . '<br>';
    // echo $pieces . '<br>';
    // echo $chambres . '<br>';



    $sql = "SELECT * FROM Property WHERE etat = '$locOuAchat' AND superficie >= '$superficie' AND pieces >= '$pieces' AND chambres >= '$chambres'";

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

    

    // if($prix == 3000 && $locOuAchat == 'Location'){
    //   $sql .= 'AND prix >=3000';
    //   // $params[] = $prix;
    //  } else if($prix == 1000000 && $locOuAchat == 'Achat'){
    //   $sql .= 'AND prix >= 1000000';
   
    //  } 

    //  else {
    //   $sql .= "AND prix >= $prix";
    //   // $params[] = $prix;
    //  }




     $properties = $this->executeRequest($sql, $params)->fetchAll(PDO::FETCH_ASSOC);
     return $properties;
 
  }


  // Renvoie les informations sur un billet
  public function getProperty($idProperty) {
    $sql = 'SELECT * FROM Property where id = ';
    $property = $this->executeRequest($sql, array($idProperty));
    if ($property->rowCount() == 1)
      return $property->fetch();  // Accès à la première ligne de résultat
    else
      throw new Exception("Property introuvable");
    }
}