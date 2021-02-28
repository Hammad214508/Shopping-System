<head>
    <title>Shop</title>
    <?php include ($_SERVER['DOCUMENT_ROOT'].'/eveg-js/header.php') ?>
</head>

<body>
  <?php include ($_SERVER['DOCUMENT_ROOT'].'/eveg-js/navigation.php');?>

  <button onclick="topFunction()" id="scroll_top" title="Go to top">
    <i class="fa fa-chevron-up" aria-hidden="true"></i>
  </button>

  <div id="basket_confirmation" class="container" style="display:none;">
    <div class="alert alert-dark" role="alert">
      <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
          <i class="fa fa-check" aria-hidden="true" style="color:green;"></i>
          <img id="preview_img" src="" class="img-fluid" alt="Image" width="45" height="45" style="border:1px solid green;"/>
          <strong style="color:green;">Added to basket</strong>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <strong>Basket subtotal </strong> <span id="item_count"></span>: <span id="basket_price" style="color:#8b0000;"></span>
          <br>
          <span class="d-none d-lg-block d-md-block" style="font-size:14px">Thank you for shooping at eVeg.</span>
        </div>
        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-xs-12 text-center my-auto">
          <button id="edit_basket" type="button" class="btn btn-warning mt-2">Edit Basket</button>
          <button id="proceed_checkout" type="button" class="btn btn-success mt-2">Proceed to Checkout</button>
          <span id="cross_preview" aria-hidden="true">&times;</span>
        </div>
      </div>


    </div>
  </div>

  <div class="container-fluid">
    <div class="jumbotron">
       <h1>Products </h1>
       <p>Find the available products here.</p>
       <button id="more" class="btn btn-link">More</button> <i class="fa fa-filter" aria-hidden="true"></i>
    </div>
  </div>

  <div class="container-fluid mb-5">
    <div id="filters" class="row mb-3" style="display:none;">
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <input type="search" id="search" class="form-control" placeholder="Search..." style="width: auto;display:inline;"/>
        <button id="search_btn" type="button" class="btn btn-secondary" style="position:absolute; font-size:22px; display:inline;">
          <i class="fa fa-search"></i>
        </button>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
        Category:
        <select class="custom-select" id="title" style="max-width: 130px;">
          <option selected>All</option>
          <option value="Mr">Fruits</option>
          <option value="Mrs">Vegetables</option>
        </select>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-auto">
        <div class="row">
          <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-xs-12">
            Price
          </div>
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-left">
            <input id="price_slider" class="mt-1" type="range" min="0" max="20" step="0.5" />
          </div>
          <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-xs-12 text-left">
            <span id="price_val" class="font-weight-bold text-secondary"></span>
          </div>

        </div>


      </div>

    </div>
    <h5 id="no_res" style="display;none;">0 results for <span id="search_txt"></span></h5>
    <div id="products_table"></div>
  </div>

</body>

<?php include ($_SERVER['DOCUMENT_ROOT'].'/eveg-js/footer.php') ?>
<script src="<?php global $basedir; ?>/eveg-js/Shop/shop.js"></script>
