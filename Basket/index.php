<head>
  <title>Basket</title>
  <?php include ($_SERVER['DOCUMENT_ROOT'].'/eveg-js/header.php') ?>
</head>
<body>
  <?php include ($_SERVER['DOCUMENT_ROOT'].'/eveg-js/navigation.php');?>

  <div class="container-fluid">
    <div class="jumbotron">
       <h1>Shopping Basket </h1>
       <p>Manage your basket here.</p>
    </div>
  </div>

  <div class="container-fluid mb-5">

    <div class="row">
      <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12">
        <div class="row">
          <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-xs-12">
            <h2>Shopping Basket</h2>
          </div>
          <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-xs-12  align-self-end">
            <div class="text-right">
              Price
            </div>
          </div>
        </div>

        <!-- <table id="basket_items" class="bskt_not_empty" style="display:none"></table> -->
        <div id="basket_items" class="bskt_not_empty" style="display:none"></div>

        <div id="basket_empty" class="bskt_empty" style="display:none">
          <h2>Your eVeg Basket is empty.</h2>
          <i class="fa fa-shopping-basket" aria-hidden="true"></i>
          <button id="continue_shopping_link" type="button" class="btn btn-link">Continue shopping</button>
        </div>


        <p id="price" class="bskt_not_empty" style="display:none"></p>

        <div id="basket_buttons" class="row bskt_not_empty mt-4" style="display:none">
          <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-xs-12">
            <button id="continue_shopping" type="button" class="btn btn-warning">Continue Shopping</button>
            <button id="clear_basket" type="button" class="btn btn-danger">Clear Basket</button>
          </div>
          <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-xs-12">
            <button id="order" type="button" class="btn btn-success">Proceed to Checkout</button>
          </div>

        </div>

      </div>
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
        Hello
      </div>

    </div>



  </div>
</body>


<?php include ($_SERVER['DOCUMENT_ROOT'].'/eveg-js/footer.php') ?>
<script src="<?php global $basedir; ?>/eveg-js/Basket/basket.js"></script>
