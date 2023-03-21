<?php

require_once 'Model/Model.php';

class Property extends Model {
  // Renvoie la liste des billets du blog
  public function getProperties() {
    $sql = '';
    $properties = $this->executerRequete($sql);
    return $properties;
  }

  // Renvoie les informations sur un billet
  public function getProperty($idProperty) {
    $sql = 'select BIL_ID as id, BIL_DATE as date,'
      . ' BIL_TITRE as titre, BIL_CONTENU as contenu from T_BILLET'
      . ' where BIL_ID=?';
    $property = $this->executerRequete($sql, array($idProperty));
    if ($property->rowCount() == 1)
      return $property->fetch();  // Accès à la première ligne de résultat
    else
      throw new Exception("Produit introuvable");
    }
}