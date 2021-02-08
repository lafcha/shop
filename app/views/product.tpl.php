

    <nav class="navbar navbar-expand-lg navbar-sticky navbar-airy navbar-light">
      <div class="container-fluid">
        <!-- Navbar Header  -->
        <a href="index.html" class="navbar-brand">oShop</a>
        <button type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse"
          aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
        <!-- Navbar Collapse -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a href="index.html" class="nav-link active">Home</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Catégories</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Types de produit</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Marques</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Blog</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Contact</a>
            </li>
          </ul>
          <div class="d-flex align-items-center justify-content-between justify-content-lg-end mt-1 mb-2 my-lg-0">
            <!-- Search Button-->
            <div class="nav-item navbar-icon-link">
              <a href="#" class="navbar-icon-link"><i class="fa fa-search"></i></a>
            </div>
            <!-- User Not Logged - link to login page-->
            <div class="nav-item">
              <a href="#" class="navbar-icon-link"><i class="fa fa-user"></i></a>
            </div>
            <!-- Cart Dropdown-->
            <div class="nav-item dropdown">
              <a href="cart.html" class="navbar-icon-link d-lg-none">
                <span class="badge badge-secondary">New</span>
              </a>
              <div class="d-none d-lg-block">
                <a id="cartdetails" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="cart.html"
                  class="navbar-icon-link dropdown-toggle">
                  <i class="fa fa-shopping-cart"></i>
                  <span class="badge badge-secondary">2</span>
                </a>
                <div aria-labelledby="cartdetails" class="dropdown-menu dropdown-menu-right p-4">
                  <div class="navbar-cart-product-wrapper">
                    <!-- cart item-->
                    <div class="navbar-cart-product">

                      <div class="w-100">

                        <div> <a href="detail.html" class="navbar-cart-product-link">Retro socks</a><small class="d-block text-muted">Quantité
                            : 1 </small><strong class="d-block text-sm">45 €
                          </strong></div>
                      </div>
                    </div>
                    <div class="navbar-cart-product">

                      <div class="w-100">

                        <div> <a href="detail.html" class="navbar-cart-product-link">Dillinger</a><small class="d-block text-muted">Quantité
                            : 1 </small><strong class="d-block text-sm">30 €
                          </strong></div>
                      </div>
                    </div>

                    <!-- total price-->
                    <div class="navbar-cart-total"><span class="text-uppercase text-muted">Total</span><strong class="text-uppercase">75
                        €</strong></div>
                    <!-- buttons-->
                    <div class="d-flex justify-content-between">
                      <a href="cart.html" class="btn btn-link text-dark mr-3">Voir le panier <i class="fa-arrow-right fa"></i></a>
                      <a href="#" class="btn btn-outline-dark">Commander</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <section class="hero">
    <div class="container">
      <!-- Breadcrumbs -->
      <ol class="breadcrumb justify-content-center">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Détente</li>
      </ol>
    </div>
  </section>

  <section class="products-grid">
    <div class="container-fluid">

      <div class="row">
        <!-- product-->
        <div class="col-lg-6 col-sm-12">
          <div class="product-image">
            <a href="detail.html" class="product-hover-overlay-link">
              <img src="images/produits/1-kiss.jpg" alt="product" class="img-fluid">
            </a>
          </div>
        </div>
        <div class="col-lg-6 col-sm-12">
          <div class="mb-3">
            <h3 class="h3 text-uppercase mb-1">Kissing</h3>
            <div class="text-muted">by <em>BOOTstrap</em></div>
            <div>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-o"></i>
            </div>
          </div>
          <div class="my-2">
            <div class="text-muted"><span class="h4">40 €</span> TTC</div>
          </div>
          <div class="product-action-buttons">
            <form action="" method="post">
              <input type="hidden" name="product_id" value="1">
              <button class="btn btn-dark btn-buy"><i class="fa fa-shopping-cart"></i><span class="btn-buy-label ml-2">Ajouter au panier</span></button>
            </form>
          </div>
          <div class="mt-5">
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum, consequuntur vel libero magni tempore rerum eos ipsum assumenda, velit architecto exercitationem animi dicta quis at facilis veritatis ut accusamus ipsa sequi recusandae officia similique tenetur? Nemo, repellat at dolore nobis non reprehenderit iusto, nostrum consectetur unde ab id quo quia eum rem veniam, ratione cum fuga autem odio perspiciatis minus reiciendis recusandae est. Earum praesentium minus quisquam et voluptates facere saepe, non velit tempore obcaecati! Porro esse sint blanditiis nulla in officiis aut dicta ipsum fugit ex enim, ab voluptas maxime culpa? Debitis, sequi minus cum, quos minima tempora eum quas repellat sunt incidunt delectus dolor eaque. Natus fugiat neque facere placeat corporis, commodi cum numquam vel exercitationem temporibus eum?
            </p>
          </div>
        </div>
        <!-- /product-->
      </div>
      
    </div>
  </section>

  <footer class="main-footer">
    <!-- Services block-->
    <div id="footer-services" class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 service-column">
            <i class="fa fa-truck"></i>
            <div class="service-text">
              <h6 class="text-uppercase">Livraison et retour gratuit</h6>
              <p class="text-muted font-weight-light text-sm mb-0">Livraison gratuite à partir de 100€</p>
            </div>
          </div>
          <div class="col-lg-4 service-column">
            <i class="fa fa-money"></i>
            <div class="service-text">
              <h6 class="text-uppercase">Satisfait ou remboursé</h6>
              <p class="text-muted font-weight-light text-sm mb-0">30 jours pour renvoyer</p>
            </div>
          </div>
          <div class="col-lg-4 service-column">
            <i class="fa fa-phone"></i>
            <div class="service-text">
              <h6 class="text-uppercase">01 02 03 04 05</h6>
              <p class="text-muted font-weight-light text-sm mb-0">Joignable 24/7</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Main block - menus, subscribe form-->
    <div id="footer-menu" class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="font-weight-bold text-uppercase text-lg text-dark mb-3">oShop</div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#" target="_blank" title="twitter" class="text-muted text-hover-primary">
                  <i class="fa fa-twitter">
                  </i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#" target="_blank" title="facebook" class="text-muted text-hover-primary">
                  <i class="fa fa-facebook-official">
                  </i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#" target="_blank" title="instagram" class="text-muted text-hover-primary">
                  <i class="fa fa-instagram">
                  </i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#" target="_blank" title="pinterest" class="text-muted text-hover-primary">
                  <i class="fa fa-pinterest">
                  </i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#" target="_blank" title="vimeo" class="text-muted text-hover-primary">
                  <i class="fa fa-vimeo">
                  </i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-6 mb-5 mb-lg-0">
            <h6 class="text-uppercase text-dark mb-3">Produits</h6>
            <ul class="list-unstyled">
              <li> <a href="#" class="text-muted">Chaussures de ville</a></li>
              <li> <a href="#" class="text-muted">Chaussures de sport</a></li>
              <li> <a href="#" class="text-muted">Pantoufles</a></li>
              <li> <a href="#" class="text-muted">Tongs</a></li>
              <li> <a href="#" class="text-muted">Chaussons</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-6 mb-5 mb-lg-0">
            <h6 class="text-uppercase text-dark mb-3">Marques</h6>
            <ul class="list-unstyled">
              <li> <a href="#" class="text-muted">oCirage</a></li>
              <li> <a href="#" class="text-muted">Shossures</a></li>
              <li> <a href="#" class="text-muted">BOOTstrap</a></li>
              <li> <a href="#" class="text-muted">Talonette</a></li>
              <li> <a href="#" class="text-muted">oPompes</a></li>
            </ul>
          </div>
          <div class="col-lg-4">
            <h6 class="text-uppercase text-dark mb-3">Recevez nos offres promotionnelles</h6>
            <p class="mb-3"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. At itaque temporibus.</p>
            <form action="#" id="newsletter-form">
              <div class="input-group mb-3">
                <input type="email" placeholder="Votre adresse email" class="form-control bg-transparent border-secondary border-right-0">
                <div class="input-group-append">
                  <button type="submit" class="btn btn-outline-secondary border-left-0"><i class="fa fa-paper-plane"></i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Copyright section of the footer-->
    <div id="footer-copyright" class="py-3">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 text-center text-md-left">
            <p class="mb-md-0">© 2018 oShop. Tous droits réservés.</p>
          </div>
          <div class="col-md-6">
            <ul class="list-inline mb-0 mt-2 mt-md-0 text-center text-md-right">
              <li class="list-inline-item">
                <img src="images/visa.svg" alt="..." class="payment-icon">
              </li>
              <li class="list-inline-item">
                <img src="images/mastercard.svg" alt="..." class="payment-icon">
              </li>
              <li class="list-inline-item">
                <img src="images/paypal.svg" alt="..." class="payment-icon">
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>


  <script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.24.7'><\/script>".replace("HOST", location.hostname));
//]]></script>
  <!-- JS -->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/app.js"></script>
</body>

</html>