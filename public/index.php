<?php


require __DIR__ . '/../app/Controllers/MainController.php';
require __DIR__ . '/../app/Controllers/CatalogController.php';

// on vient réceptioner dans $pageName ce qui se passe dans l'url
if (isset($_GET['page'])){
  $pageName = $_GET['page'];
} 
else {
  $pageName = '/';
}

// ici mes routes ! 
// J'associe a chaque adresse un controller et une methode
$route = [
  '/' => [
    'controller' => 'MainController',
    'action' => 'home'
  ],

  '/categorie' => [
    'controller' => 'CatalogController',
    'action' => 'category',
  ]


];


// début du Dispatcher
// Ici je verifie que la page demandée existe bien dans 
// mon tableau de routes
if(isset($route[$pageName])) {
  // je récupère les infos (nom de controller et methode) 
  // de la route demandée
  $routeData = $route[$pageName];
  // ici je reçoit le nom du controller a utiliser
  $controllerToUse = $routeData['controller'];
  // ici le nom de la methode a utiliser
  $methodToUse = $routeData['action'];
} else {
  // et si la route n'existe pas 
  // on va afficher ma page d'accueil(grace a la methode home du controller MainController)
  $controllerToUse = 'MainController';
  $methodToUse = 'pageNotFoundAction';
}

// J'instancie dynamiquement le contrôleur a utiliser 
/*
Donc si je suis sur ma page d'accueil : 
$routeData est égal a [
    'controller' => 'MainController',
    'action' => 'home'
  ]
$controllerToUse est égal à 'MainController'
$methodToUse est égal a 'home'

DONC POUR LES LIGNES CI DESSOUS ON A :

$controller = new MainController();
$controller->home(); 

*/

$controller = new $controllerToUse();
$controller->$methodToUse();