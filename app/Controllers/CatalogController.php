<?php

class CatalogController {

  function show($viewName, $viewData = [])
  {
    $viewData['curentPage'] = $viewName;
    // la superglobale $_SERVER donne un tableau associatif avec de nombreuses informations
    // l'entée "BASE_URI" permet d'avoir le chemin en absolu de la racine de mon projet
    // (on peut concat avec le dossier que l'on souhaite (ici assets)
   // on pourra donc l'appeler dans toute nos vues sans que cela dépende de là ou on se place.
    $assetsFolder = $_SERVER['BASE_URI'] . '/assets';
    //  var_dump($assetsFolder);die();
    require __DIR__ . '/../views/header.tpl.php';
    require __DIR__ . '/../views/' . $viewName . '.tpl.php';
    require __DIR__ . '/../views/footer.tpl.php';
  }
    
  
  // ici la methode category va recevoir $match['params']
  // qui contient un tableau associatif avec une seule entrée : 
  // 'id' => idDetectéDansUrl
   
  function category($params)
  {
    $viewData = [
      'categoryId' => $params['id']
    ];

    $this->show('category', $viewData);
  }







}