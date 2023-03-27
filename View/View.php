<?php
class View {

// Nom du fichier associé à la vue
private $file;
// Titre de la vue (défini dans le fichier vue)
private $title;

public function __construct($action, $errorLogin = Null) {
  if($action == 'AddProperty' || $action == 'EditProperty'){
    $this->style ="Tools/Style/form.css";
  }else{
    $this->style ="Tools/Style/" . strtolower($action) . ".css";
  }

switch ($action) {
  case 'Resultat':
    $this->title = 'Recherches - Immo&Co';
    break;
  case 'Property':
    $this->title = 'Annonce - Immo&Co';
    break;
  case 'Accueil':
    $this->title = 'Accueil - Immo&Co';
    break;
  case 'Login':
    $this->title = 'Authentification admin - Immo&Co';
    break;
  case 'AddProperty':
    $this->title = 'Ajout de bien - Immo&Co';
    break;
  case 'EditProperty':
    $this->title = 'Modification de bien - Immo&Co';
    break;
  default:
    $this->title = 'Error - Immo&Co';
    break;
}

  // Détermination du nom du fichier vue à partir de l'action
  $this->file = "View/" . $action . ".php";

  // Message d'erreur de connexion
  $this->errorLogin = $errorLogin;
}

// Génère et affiche la vue
public function generate($data = null) {
  session_start();
  // Génération de la partie spécifique de la vue
  $content = $this->generateFile($this->file, $data["property"]);

  // Génération du gabarit commun utilisant la partie spécifique
  $view = $this->generateFile('View/Template.php',
  array('title' => $this->title, 'content' => $content, 'style' => $this->style)); // Renvoi de la vue au navigateur
  echo $view;
}

// Génère un fichier vue et renvoie le résultat produit
private function generateFile($file, $data = null) {

  if (file_exists($file)) {
    // Rend les éléments du tableau $donnees accessibles dans la vue
  if ($data != null){
  extract($data);
  }
  ob_start();
    // Son résultat est placé dans le tampon de sortie
    require $file;
    // Arrêt de la temporisation et renvoi du tampon de sortie
  return ob_get_clean();
  }
  else {
    throw new Exception("Fichier '$file' introuvable");
  }
}
}