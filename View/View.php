<?php
class View {

// Nom du fichier associé à la vue
private $file;
// Titre de la vue (défini dans le fichier vue)
private $title;

public function __construct($action) {
  // Détermination du nom du fichier vue à partir de l'action
  $this->file = "View/" . 'Accueil' . ".php";
}

// Génère et affiche la vue
public function generate($data = null) {
  // Génération de la partie spécifique de la vue
  $content = $this->generateFile($this->file, $this->data);
  // Génération du gabarit commun utilisant la partie spécifique
  $view = $this->generateFile('View/Template.php',
    array('title' => $this->title, 'content' => $content, 'style' => $style));
  // Renvoi de la vue au navigateur
  echo $view;
}

// Génère un fichier vue et renvoie le résultat produit
private function generateFile($file, $data = null) {
  if (file_exists($file)) {
    // Rend les éléments du tableau $donnees accessibles dans la vue
    
    // Démarrage de la temporisation de sortie
   
    // Inclut le fichier vue
    // Son résultat est placé dans le tampon de sortie
    require $file;
    // Arrêt de la temporisation et renvoi du tampon de sortie
    
  }
  else {
    throw new Exception("Fichier '$file' introuvable");
  }
}
}