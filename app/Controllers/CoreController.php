<?php

namespace Oshop\Controllers;
use Oshop\Models\Brand;
use Oshop\Models\Type;


class CoreController {

  /**
   * Méthode permettant d'afficher un rendu HTML 
   * @param [type] $viewName
   * @param array $viewData
   * @return void
   */
    protected function show($viewName, $viewData = [])
    {
      global $router;
  
      $brandModel = new Brand();
      $footerFiveBrands = $brandModel->findFooterFive();

      $typeModel = new Type();
      $footerFiveType = $typeModel->findFooterFive();
  
  
      $viewData['curentPage'] = $viewName;

      // A partir de cette ligne, il y a des variables qui auront pour nom le nom les clés du tableau qui chacune contiendra le contenu de la clé du tableau; 
      // si c'est un tableau associatif avec une clé 'cle1'=>"contenu clé 1"
      // on aura la propriété $cle1 = "contenu clé 1"
      extract($viewData);

      // la superglobale $_SERVER donne un tableau associatif avec de nombreuses informations
      // l'entée "BASE_URI" permet d'avoir le chemin en absolu de la racine de mon projet
      // (on peut concat avec le dossier que l'on souhaite (ici assets)
     
      // on pourra donc l'appeler dans toute nos vues sans que cela dépende de là ou on se place.
  
      $baseUri = $_SERVER['BASE_URI'] . "/";
      $assetsFolder = $_SERVER['BASE_URI'] . '/assets';
      //  var_dump($assetsFolder);die();
      require __DIR__ . '/../views/header.tpl.php';
      require __DIR__ . '/../views/' . $viewName . '.tpl.php';
      require __DIR__ . '/../views/footer.tpl.php';
  
    }
}