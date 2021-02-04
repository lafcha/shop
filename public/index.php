<?php

// On lie le fichier MainController

require __DIR__ . '/../app/Controllers/MainController.php';

// on vérifie que la page existe, si oui, on récupère le nom de la page et on la stocke dans $pageName
if (isset($_GET['PAGE'])){
    $pageName = $_GET['page'];
} 
else {
   //sinon, on redirige vers la page d'accueil $pageName = accueil
   $pageName = '/';
}

// on crée les routes qui vont 
$route = [
    '/' => [
        'controller' => 'MainController',
        'action' =>'home'
    ]
];


// on vérifie que les routes on bien un controller et une méthode associée

if(isset($route[$pageName])){
    $routeData = $route[$pageName];
    $controllerToUse = $routeData['controller'];
    $methodToUse = $routeData['action'];

} 
// si la page n'est pas trouvée, on utilisera le MainController et la méthode home
else {
    $controllerToUse = 'MainController';
    $methodToUse = 'home';

}

// on instancie un nouveau controller, on utiliser pour ça le controller indiqué dans $controllerToUse
$controller = new $controllerToUse();
// on utilise la méthode indiquée dans $methodToUse 
$controller->$methodToUse();