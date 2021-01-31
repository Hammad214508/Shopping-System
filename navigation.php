<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
  <div class="container-fluid">

    <div class="navbar-header">
      <a id="nav-home" class="navbar-brand" href="<?php global $basedir; ?>/eveg-js/Home">eVeg</a>
    </div>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div id="main-menu" class="collapse navbar-collapse">
        <ul class="nav navbar-nav mr-auto mt-2 mt-lg-0">
            <li id="nav-products" class="nav-item"><a class="nav-link" href="<?php global $basedir; ?>/eveg-js/Shop/">Products</a></li>
        </ul>

        <ul class="nav navbar-nav">
            <li id="nav-basket" class="nav-item">
              <a class="nav-link" href="<?php global $basedir; ?>/eveg-js/Basket/">Basket
                <i class="fa fa-shopping-cart" aria-hidden="true" style="font-size:20px"></i>
                <span class='badge badge-warning' id='cart_count'> 0 </span>
              </a>
            </li>
        </ul>
    </div>

  </div>
</nav>
