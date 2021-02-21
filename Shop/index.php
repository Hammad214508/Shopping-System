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
          <span style="font-size:14px">Thank you for shooping at eVeg.</span>
        </div>
        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-xs-12 text-center my-auto">
          <button id="edit_basket" type="button" class="btn btn-warning">Edit Basket</button>
          <button id="proceed_checkout" type="button" class="btn btn-success">Proceed to Checkout</button>
          <span id="cross_preview" aria-hidden="true">&times;</span>
        </div>
      </div>


    </div>
  </div>

  <div class="container-fluid">
    <div class="jumbotron">
       <h1>Products </h1>
       <p>Find the available products here.</p>
    </div>
  </div>

  <div class="container-fluid mb-5">
    <div id="products_table"></div>
  </div>

</body>

<?php include ($_SERVER['DOCUMENT_ROOT'].'/eveg-js/footer.php') ?>
<script src="<?php global $basedir; ?>/eveg-js/Shop/shop.js"></script>
