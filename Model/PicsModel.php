<?php

// class image extends Model {

// protected function executeRequest($sql, $params = null) {
//     if ($params == null) {
//         $resultat = $this->getBdd()->query($sql);    // exécution directe
//     }
//     else {
//         $resultat = $this->getBdd()->prepare($sql)->execute($params);  // requête préparée
//     }
//     return $resultat;
// }


// public function getPics() {
//     $sql = 'SELECT * FROM image';
//     $pics = $this->executerRequete($sql);
//     return $pics;
//   }


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
// }