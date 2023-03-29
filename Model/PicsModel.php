<?php

require_once 'Model/Model.php';
class PicsModel extends Model {

public function savePics($photo, $id) {
    
    $sql = "INSERT INTO photos (photo, Property_idProperty) VALUES ('$photo', '$id')";
    $result = $this->executeRequest($sql);
 
    return $result;
  }


// public function setPic($photo){ 
   
//     $sql= "INSERT INTO image (photo) 
//     VALUES ('".$photo."')";
//     $result= $this->executerRequete($sql);

//     return $result;
//   }

// public function deletePhoto(){ 
//     $sql = "DELETE FROM image WHERE id = ".$idphotos;
//     $result = $this->executerRequete($sql);
//     return $result;
//   }
}