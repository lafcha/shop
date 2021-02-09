
  <section>
    <div class="container-fluid">
      <div class="row mx-0">
        <div class="col-md-6">

          <div class="card border-0 text-white text-center"><img src="<?= $baseUri ?><?= $viewData['categories'][0]->getPicture()?>"
         
              alt="Card image" class="card-img">
            <div class="card-img-overlay d-flex align-items-center">
              <div class="w-100 py-3">
                <h2 class="display-3 font-weight-bold mb-4"><?= $viewData['categories'][0]->getName()?></h2><a href="<?= $router->generate('catalog-category', ['id' => $viewData['categories'][0]->getId()]) ?>" class="btn btn-light">Découvrir</a>
              </div>
            </div>
          </div>

          
        </div>
        <div class="col-md-6">
          <div class="card border-0 text-white text-center"><img src="<?= $baseUri ?><?= $viewData['categories'][1]->getPicture()?>"
              alt="Card image" class="card-img">
            <div class="card-img-overlay d-flex align-items-center">
              <div class="w-100 py-3">
                <h2 class="display-3 font-weight-bold mb-4"><?= $viewData['categories'][1]->getName()?></h2><a href="<?= $router->generate('catalog-category', ['id' => $viewData['categories'][1]->getId()]) ?>" class="btn btn-light">C'est parti</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mx-0">
          
        <div class="col-lg-4">
          <div class="card border-0 text-center text-white"><img src="<?= $baseUri ?><?= $viewData['categories'][2]->getPicture()?>"
              alt="Card image" class="card-img">
            <div class="card-img-overlay d-flex align-items-center">
              <div class="w-100">
                <h2 class="display-4 mb-4"><?= $viewData['categories'][2]->getName()?></h2><a href="<?= $router->generate('catalog-category', ['id' => $viewData['categories'][2]->getId()]) ?>" class="btn btn-link text-white">Faire un tour</a>
                  <i class="fa-arrow-right fa ml-2"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
            <div class="card border-0 text-center text-dark">
            <img src="<?= $baseUri ?><?= $viewData['categories'][3]->getPicture()?>"
                alt="Card image" class="card-img">
              <div class="card-img-overlay d-flex align-items-center">
                <div class="w-100">
                  <h2 class="display-4 mb-4"><?= $viewData['categories'][3]->getName()?></h2>
                  <a href="<?= $router->generate('catalog-category', ['id' => $viewData['categories'][3]->getId()]) ?>" class="btn btn-link text-dark">Se faire plaisir
                    <i class="fa-arrow-right fa ml-2"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        <div class="col-lg-4">
          <div class="card border-0 text-center text-white"><img src="<?= $baseUri ?><?= $viewData['categories'][4]->getPicture()?>"
              alt="Card image" class="card-img">  
            <div class="card-img-overlay d-flex align-items-center">
              <div class="w-100">
                <h2 class="display-4 mb-4"><?= $viewData['categories'][4]->getName()?></h2><a href="<?= $router->generate('catalog-category', ['id' => $viewData['categories'][4]->getId()]) ?>" class="btn btn-link text-white">Bien choisir <i class="fa-arrow-right fa ml-2"></i></a>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </section>
