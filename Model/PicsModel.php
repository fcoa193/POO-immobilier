<?php

require_once 'Model/Model.php';
class PicsModel extends Model {

public function savePics($photo, $id) {
    
    $sql = "INSERT INTO photos (photo, Property_idProperty) VALUES ('$photo', '$id')";
    $result = $this->executeRequest($sql);
 
    return $result;
  }


public function getPics(){ 
   
    $sql= "SELECT * FROM photos";
    $result= $this->executeRequest($sql);
    $result =$result->fetchAll();
    return $result;
  }

  public function getPicsProperty($idProperty){ 
   
    $sql= "SELECT * FROM photos where Property_idProperty = $idProperty";
    $result= $this->executeRequest($sql);
    $result = $result->fetchAll();
    return $result;
  }

// public function deletePhoto(){ 
//     $sql = "DELETE FROM image WHERE id = ".$idphotos;
//     $result = $this->executerRequete($sql);
//     return $result;
//   }
}