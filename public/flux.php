<?php

// on  imagine que notre url se fini par "categorie/12"


//-----------
// PAGE INDEX 
//------------

//********ROUTE********** */
// PHP utilise la route "catégorie"
$router->map(
    'GET', 
    '/catalogue/categorie/[i:id]', // 12
    [
      'controller' => 'CatalogController',
      'action' => 'category'
    ],
    'catalog-category' 
  );

//********DISPATCHER********** */


// PHP vérifie si la route existe
$match = $router->match();

if($match){

  $routeData = $match['target']; // 'target' = [ 'controller' =>'CatalogController', 'action'=>'category']
  
  $constrollerToUse = $routeData['controller']; // 'CatalogController'
  $methodToUse = $routeData['action']; // 'category'

  $controller = new $constrollerToUse();
  $controller->$methodToUse($match['params']); //id=12

} else {
  $controller = new MainController();
  $controller->pageNotFoundAction();
  // gestion de 404
};

// une fois la dispatch finie, PHP va sur le controller : CatalogController

//-----------
// PAGE CATALOGCONTROLLER
//------------

// **********METHODE CATEGORY***********

function category($params) // on transmet le tableau params qui contient id = 12
{
  $viewData = [
    'categoryId' => $params['id'] // on ajoute une entrée 'categoryId' qui contient $params[12]
  ];

  $this->show('category', $viewData); // on transmet à show 'category' et l'id => 12

}

// **********METHODE SHOW***********

function show($viewName, $viewData = []) // viewName = 'category', on transmet le tableau viewData qui a pour l'instal la seule entrée categoryId = $params[12]
{
  $viewData['curentPage'] = $viewName; // on ajoute une entrée 'currentPage' qui contient "category"

  $assetsFolder = $_SERVER['BASE_URI'] . '/assets';
  //  var_dump($assetsFolder);die();
  require __DIR__ . '/../views/header.tpl.php';
  require __DIR__ . '/../views/' . $viewName . '.tpl.php';
  require __DIR__ . '/../views/footer.tpl.php';
}

//Les données sont disponibles dans tous les fichiers du require

//-----------
// PAGE CATEGORY.TPL.PHP
//------------

<h1>Categorie Numero :  <?= $viewData['categoryId']?></h1> // on peut récupérer l'information contenue dans l'entrée "categoryId" du tableau viewData (ici 12)

// NOTE : on utilise pas encore $viewData['currentPage']

