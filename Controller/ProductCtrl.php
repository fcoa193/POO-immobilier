<?php
require_once 'View/View.php';

class ProductCtrl
{
    // Affiche les détails sur un billet
    public function Product()
    {
        $view = new View('Product');
        $view->generate();
    }
}
