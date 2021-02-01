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
          <li class="nav-item"><a id="nav-products" class="nav-link" href="<?php global $basedir; ?>/eveg-js/Shop/">Products</a></li>
          <li class="nav-item"><a id="nav-products" class="nav-link" href="<?php global $basedir; ?>/eveg-js/Help/">Help</a></li>
          <li style="color:#343a40">fill</li>
          <li  class="nav-item">
            <div class="autocomplete input-group" >
              <input type="search" id="search" class="form-control" placeholder="Search..." style="width:300px;"/>
            </div>
            <button type="button" class="btn btn-secondary" style="position:absolute; font-size:22px;" onclick="itemSearch()">
              <i class="fa fa-search"></i>
            </button>
          </li>
        </ul>




        <ul class="nav navbar-nav">
          <li id="nav-basket" class="nav-item">
            <a class="nav-link" href="<?php global $basedir; ?>/eveg-js/Basket/">Basket
              <i class="fa fa-shopping-cart" aria-hidden="true" style="font-size:20px"></i>
              <span class='badge badge-warning' id='cart_count'></span>
            </a>
          </li>
        </ul>
    </div>

  </div>
</nav>

<script>
  updateBasketCount();
  autocomplete(document.getElementById("search"), food_items);

</script>
