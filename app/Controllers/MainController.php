<?php

namespace Oshop\Controllers;

use Oshop\Models\Category;

class MainController extends CoreController {

  function home()
  {

    $categoryModel = new Category;
    $categoriesInHome = $categoryModel->findHomeFive();

    $viewData = [
      'categories' => $categoriesInHome,
    ];

    extract($viewData);

    //dump($viewData);die();
    $this->show('home', $viewData);

  }

  function pageNotFoundAction()
  {
    // ici du nouveau on utilise header non pas pour une redirection
    // mais pour envoyer un code 404 !
    //header('HTTP/1.0 404 Not found');
    //je peux aussier utiliser :
    http_response_code(404);
    $this->show('err404');
  }

  function legalMentions(){
    $this->show('mentions');
  }

}