<?php

require_once 'Model/Model.php';

class AdminModel extends Model {
  // Renvoie la liste des billets du blog
 
  // Renvoie les informations sur un billet
  public function getAdmin($id) {
    $sql = "SELECT * FROM Admin WHERE identifiant=?";
    $admin = $this->executeRequest($sql, array($id));
    if ($admin->rowCount() == 1){
        return $admin->fetch();
    } else
        $admin = false;
        return $admin;
  }
}