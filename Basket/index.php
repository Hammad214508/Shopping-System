<head>
  <title>Basket</title>
  <?php include ($_SERVER['DOCUMENT_ROOT'].'/eveg-js/header.php') ?>
</head>
<body>
  <?php include ($_SERVER['DOCUMENT_ROOT'].'/eveg-js/navigation.php');?>
  <div class="container-fluid mb-5">

    <table id="basket_items" class="bskt_not_empty" style="display:none"></table>

    <div id="basket_empty" class="bskt_empty" style="display:none">
      <h2>Your eVeg Basket is empty.</h2>
      <i class="fa fa-shopping-basket" aria-hidden="true"></i>
      <button id="continue_shopping_link" type="button" class="btn btn-link">Continue shopping</button>
    </div>


    <p id="price" class="bskt_not_empty" style="display:none"></p>

    <div id="basket_buttons" class="bskt_not_empty" style="display:none">
      <button id="continue_shopping" type="button" class="btn btn-secondary">Continue Shopping</button>
      <button id="clear_basket" type="button" class="btn btn-secondary">Clear Basket</button>
      <button id="order" type="button" class="btn btn-secondary">Order</button>
    </div>

  </div>
</body>


<?php include ($_SERVER['DOCUMENT_ROOT'].'/eveg-js/footer.php') ?>
<script src="<?php global $basedir; ?>/eveg-js/Basket/basket.js"></script>
