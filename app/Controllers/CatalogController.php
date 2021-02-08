<?php

class CatalogController {

  function show($viewName, $viewData = [])
  {
    global $router;
    // Etant donné que toute les methodes de mon Controleur
    // font appel a la methode show.
    // Et etant donné qu'on a besoin des infos de la table brand
    // dans le footer de toute les pages,
    // je vais directement faire appel a mon model dans la methode
    // show ! 
    $brandModel = new Brand();
    $footerFiveBrands = $brandModel->findFooterFive();

    $viewData['curentPage'] = $viewName;
    // la superglobale $_SERVER donne un tableau associatif avec de nombreuses informations
    // l'entée "BASE_URI" permet d'avoir le chemin en absolu de la racine de mon projet
    // (on peut concat avec le dossier que l'on souhaite (ici assets)
   // on pourra donc l'appeler dans toute nos vues sans que cela dépende de là ou on se place.
    $assetsFolder = $_SERVER['BASE_URI'] . '/assets';
    $baseUri = $_SERVER['BASE_URI'] . '/';
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
    //! ALLER CHERCHER TOUTE LES INFOS NECESSAIRES EN BDD
    //! Pour les transmettre à la vue
    // instancie un objet à partir de la classe Category ...
    $categoryModel = new Category();
    // Pour utiliser la methode findAll, qui va nous renvoyer tous les resultats
    //$allCategories = $categoryModel->findAll();
    //dump($allCategories);
    $oneCategory = $categoryModel->find($params['id']);
    //dump($oneCategory);
  
    // Aller chercher les produits qui ont pour categorie_id $params['id']
    $productModel = new Product();
    $products = $productModel->findAllByCategory($params['id']);



    // ici plutot que d'avoir un id => l'id Detecté
    // je préfère avoir un 'catgegoryId' pour etre plus précis
    $viewData = [
      'categoryId' => $params['id'],
      'category' => $oneCategory,
      'products' => $products
    ];
    $this->show('category', $viewData);
  }


  function type($params)
  {
    $typeModel = new Type();
    $oneType = $typeModel->find($params['id']);
  
    // Aller chercher les produits qui ont pour type_id $params['id']
    $productModel = new Product();
    $products = $productModel->findAllByType($params['id']);



    // ici plutot que d'avoir un id => l'id Detecté
    // je préfère avoir un 'catgegoryId' pour etre plus précis
    $viewData = [
      'typeId' => $params['id'],
      'type' => $oneType,
      'products' => $products,
    ];
    $this->show('type', $viewData);
  }


  function brand($params)
  {
    $brandModel = new Brand();
    $oneBrand = $brandModel->find($params['id']);

    // Aller chercher les produits qui ont pour type_id $params['id']
    $productModel = new Product();
    $products = $productModel->findAllByBRand($params['id']);



    // ici plutot que d'avoir un id => l'id Detecté
    // je préfère avoir un 'catgegoryId' pour etre plus précis
    $viewData = [
      'brandId' => $params['id'],
      'brand' => $oneBrand,
      'products' => $products,
    ];
    $this->show('brand', $viewData);
  }


  function product($params){
    $viewData = [
      'productId' => $params['id']
    ];

    $this->show('product', $viewData);


  }






}