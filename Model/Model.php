<?php
 require './Model/env.php';

abstract class Model {

  // Objet PDO d'accès à la BD
  private $bdd;

  // Exécute une requête SQL éventuellement paramétrée

  protected function executeRequest($sql, $params = null) {
    try{
      if ($params == null) {
        $resultat = $this->getBdd()->query($sql);    // exécution directe
      }
      else {
        $resultat = $this->getBdd()->prepare($sql);  // requête préparée
        $resultat->execute($params);
      }
      return $resultat;
    } catch (Exception $e){
    echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
  }

  // Renvoie un objet de connexion à la BD en initialisant la connexion au besoin
  private function getBdd() {
    if ($this->bdd == null) {
        $user = getenv('USER');
        $password = getenv('PASSWORD');
      // Création de la connexion
      $this->bdd = new PDO('mysql:host=localhost;port=8889;dbname=immo;charset=utf8',
      $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    return $this->bdd;
  }
}