<?php

class CatalogController extends CoreController {

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