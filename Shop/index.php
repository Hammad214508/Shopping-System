<head>
    <title>Shop</title>
    <?php include ($_SERVER['DOCUMENT_ROOT'].'/eveg-js/header.php') ?>
</head>

<body>
  <?php include ($_SERVER['DOCUMENT_ROOT'].'/eveg-js/navigation.php');?>

  <div class="container-fluid">
    <div class="jumbotron">
       <h1>Products </h1>
       <p>Find the available products here.</p>
    </div>
  </div>

  <div class="container-fluid mb-5">
    <!-- <table id="products_table"></table> -->
    <div id="products_table"></div>

    <button id="view_basket" type="button" class="btn btn-secondary">View Basket</button>
  </div>

</body>

<?php include ($_SERVER['DOCUMENT_ROOT'].'/eveg-js/footer.php') ?>
<script src="<?php global $basedir; ?>/eveg-js/Shop/shop.js"></script>
