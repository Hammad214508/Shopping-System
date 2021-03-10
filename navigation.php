<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
  <div class="container-fluid">

    <div class="navbar-header">
      <a class="navbar-brand" href="<?php global $basedir; ?>/eveg-js/Home">
        <img style="max-width:100px; margin-top: -7px;" src="<?php global $basedir; ?>/eveg-js/img/logo.png">
      </a>
    </div>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div id="main-menu" class="collapse navbar-collapse">
        <ul class="nav navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item"><a id="nav-contact" class="nav-link" href="<?php global $basedir; ?>/eveg-js/Contact/">Contact Us</a></li>
          <li class="nav-item"><a id="nav-help" class="nav-link" href="<?php global $basedir; ?>/eveg-js/Help/">Help</a></li>
          <div class="d-none d-lg-block">
            <li class="nav-item" style="color:#343a40">123</li>
          </div>

          <li class="nav-item">
            <div class="autocomplete" style="display:inline;">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <input type="search" id="search" class="form-control" placeholder="Search..." style="width: auto;display:inline;"/>
                    <button id="search_btn" type="button" class="btn btn-secondary" style="position:absolute; font-size:22px; display:inline;">
                      <i class="fa fa-search"></i>
                    </button>
              </div>
            </div>
          </li>
        </ul>
        <ul class="nav navbar-nav">
          <li class="nav-item"><a id="nav-home" class="nav-link" href="<?php global $basedir; ?>/eveg-js/Home/">Home</a></li>
          <li class="nav-item"><a id="nav-products" class="nav-link" href="<?php global $basedir; ?>/eveg-js/Shop/">Products</a></li>
          <li id="nav-basket" class="nav-item">
            <a class="nav-link" href="<?php global $basedir; ?>/eveg-js/Basket/">Basket
              <i class="fa fa-shopping-cart" aria-hidden="true" style="font-size:20px"></i>
              <span class='badge badge-warning' id='cart_count'></span>
            </a>

          </li>
        </ul>
        <div class="shopping-cart" style="display:none;">
          <div class="shopping-cart-header mb-1">
            <i class="fa fa-shopping-cart cart-icon"></i><span id="preview_count" class="badge">3</span>
            <div class="shopping-cart-total">
              <span class="lighter-text">Total:</span>
              <span class="main-color-text total"><strong id="preview_price"></strong></span>
            </div>
          </div>
          <div id="cart_items_preview" class="shopping-cart-items"></div>
          <div class="text-center mb-3">
            <button id="preview_checkout" type="button" class="btn btn-lg btn-block btn-success mt-4">Checkout <i class="fa fa-chevron-right ml-1" aria-hidden="true"></i></button>
          </div>
        </div>
    </div>
  </div>
</nav>

<button onclick="topFunction()" id="scroll_top" title="Go to top">
  <i class="fa fa-chevron-up" aria-hidden="true"></i>
</button>

<script>
  updateBasketCount();
  autocomplete(document.getElementById("search"), food_items);
</script>
