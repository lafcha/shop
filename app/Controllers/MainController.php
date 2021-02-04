<?php

class MainController {
    
    function show($viewName, $viewData = [])
    {

        $viewData['currentPage'] = $viewName;

        // la superglobale $_SERVER donne un tableau associatif avec de nombreuses informations
        // L'entrée "BASE_URI" permet d'avoir le chemin en absolu de la racine du projet
        // on concataine avec le dossier qu'on souhaite (ici assets) (optionnel)
        // on pourra donc l'appeler sans que cela dépende de là ou on se place
        // On pourra l'utiliser de partout sans avoir à se préocuper de là où on est
        // Et il changera si on passe sur le serveur
        // En revanche, il ne faut pas bouger l'emplacement du dossier
        $assetsFolder= $_SERVER['BASE_URI'] . '/assets';

        require __DIR__ . '/../views/header.tpl.php' ;
        require __DIR__ . '/../views/'.$viewName . '.tpl.php' ;
        require __DIR__ . '/../views/footer.tpl.php' ;
    }

    function home()
    {
        $this->show('home');
    }
    
}