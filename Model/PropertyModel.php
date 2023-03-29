<?php

require_once 'Model/Model.php';

class PropertyModel extends Model {
  // Renvoie la liste des billets du blog
  public function getProperties() {
    if (isset($_POST)) {
      $ville = $_POST['city'];
      $locOuAchat = $_POST['louer-acheter'];
      $appartement = $_POST['appartement'];
      $maison = $_POST['maison'];
      $prix = $_POST['maxprice'];
      $superficie = $_POST['superficie'];
      $pieces = $_POST['pieces'];
      $chambres = $_POST['chambres'];

      $sql = "SELECT prix, intitule, idProperty FROM Property WHERE etat = '$locOuAchat' AND superficie >= '$superficie' AND pieces >= '$pieces' AND chambres >= '$chambres'";
    } else {
      $sql = "SELECT prix, intitule, idProperty FROM Property";
    }
  

    $_SESSION['ville'] = $ville;
    $_SESSION['louer-acheter'] = $locOuAchat;
    $_SESSION['appartement'] = $appartement;
    $_SESSION['maison'] = $maison;
    $_SESSION['maxprice'] = $prix;
    $_SESSION['superficie'] = $superficie;
    $_SESSION['pieces'] = $pieces;
    $_SESSION['chambres'] = $chambres;

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

   // Renvoie les informations sur un billet
   public function deleteProperty($idProperty) {
    $sql = "DELETE FROM Property WHERE idProperty=$idProperty";
    $result = $this->executeRequest($sql);

    return $result;  // Accès à la première ligne de résultat
  }



    
    public function saveProperty($ville, $adresse, $code_postal, $etat, $type, $intitule, $prix, $etage, $superficie, $pieces, $chambres, $meuble, $piscine, $balcon, $jardin, $garage, $cave, $ascenseur, $description
    // 
    ){ 
      
      $sql = "INSERT INTO Property (ville, adresse, code_postal, etat, type, intitule, prix, etage, superficie, pieces, chambres, meuble, piscine, balcon, jardin, garage, cave, ascenseur, description  
      ) VALUES ('$ville',  '$adresse', '$code_postal', '$etat', '$type', '$intitule', '$prix', '$etage', '$superficie', '$pieces', '$chambres', '$meuble', '$piscine', '$balcon', '$jardin', '$garage', '$cave', '$ascenseur', '$description')";
      $result = $this->executeRequest($sql); 

      return $result;
    }



 // addProperty        
 public function getIdProperty($ville, $adresse, $code_postal, $etat, $type, $intitule, $prix, $etage, $superficie, $pieces, $chambres, $meuble, $piscine, $balcon, $jardin, $garage, $cave, $ascenseur, $description
 // 
 ){ 
   
   $sql = "SELECT idProperty FROM Property WHERE adresse = '$adresse' AND code_postal = '$code_postal' AND etat = '$etat' AND type = '$type' AND intitule = '$intitule' AND prix = '$prix' AND etage = '$etage' AND superficie = '$superficie' AND pieces = '$pieces' AND chambres = '$chambres' AND meuble = '$meuble' AND piscine = '$piscine' AND balcon = '$balcon' AND jardin = '$jardin' AND garage = '$garage' AND cave = '$cave' AND ascenseur = '$ascenseur' AND description = '$description'";
   $result = $this->executeRequest($sql); 

   return $result->fetch();
 }



    // public function EditProperty($ville, $adresse, $code_postal, $etat, $type, $intitule, $prix, $etage, $superficie, $pieces, $chambres, $photos, $meuble, $piscine, $balcon, $jardin, $garage, $cave, $ascenseur, $description
    // // 
    // ){ 
      
    //   $sql = "UPDATE Property SET (ville = '$ville',adresse = '$adresse', code_postal = '$code_postal', etat = '$etat', type = '$type', intitule = '$intitule', prix = '$prix', etage = '$etage', superficie = '$superficie', pieces = '$pieces', chambres = '$chambres', photos = '$photos', meuble = '$meuble', piscine = '$piscine', balcon = '$balcon', jardin = '$jardin', garage = '$garage', cave = '$cave', ascenseur = '$ascenseur', description = '$description'
    //   ) 
    //   VALUES ('$ville',  '$adresse', '$code_postal', '$etat', '$type', '$intitule', '$prix', '$etage', '$superficie', '$pieces', '$chambres', '$photos', '$meuble', '$piscine', '$balcon', '$jardin', '$garage', '$cave', '$ascenseur', '$description'
    //   -- 
    //   )";
    //   $result = $this->executeRequest($sql); 

    //   return $result;
    // }


  // 
 
  //   $sql= "UPDATE Property SET adresse = '".$adresse."', code_postal = '".$code_postal."', ville = '".$ville.", etat = '".$etat."', type = '".$type."', intitule = '".$intitule.", prix = ".$prix.", etage = '".$etage.", superficie = ".$superficie.", pieces= ".$pieces.", chambres = ".$chambres.", photos= ".$photos.", meuble= ".$meuble.", piscine = ".$piscine.", balcon= ".$balcon.", jardin = ".$jardin.", garage= ".$garage.", cave = ".$cave.", ascenseur = ".$ascenseur.", description= ".$description."
  //    WHERE idProperty = ".$idProperty;
  //   $result= $this->executerRequete($sql);
    
  //   return $result;
  // }
  

    public function getPropertiesBack()
    {
      $ville = $_SESSION['ville'];
      $locOuAchat = $_SESSION['louer-acheter'] ;
      $appartement = $_SESSION['appartement'];
      $maison = $_SESSION['maison'];
      $prix = $_SESSION['maxprice'] ;
      $superficie = $_SESSION['superficie'];
      $pieces = $_SESSION['pieces'];
      $chambres = $_SESSION['chambres'];

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
}