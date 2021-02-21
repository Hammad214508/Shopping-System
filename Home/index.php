<head>
  <title>Home</title>
  <?php include ($_SERVER['DOCUMENT_ROOT'].'/eveg-js/header.php') ?>
</head>
<body onload="setupBasket();" style="background-image: url('../tree.png') ; background-repeat: no-repeat; background-position: 0% 75%;; background-size: 27em 27em;">
  <?php include ($_SERVER['DOCUMENT_ROOT'].'/eveg-js/navigation.php');?>
  <div class="container-fluid mb-5">
    <div class="text-center black_font" style="margin-top:14em;">
      <div>
        <h1 style="font-family: URW Chancery L, cursive" class="display-4">Welcome to eVeg!</h1>
        <h2 class="display-1">Fresh Organic Food</h2>
        <h5>Fresh produce from the Midland's green countryside.</h5>
        <h5> &copy; 2014 InterVeg Coventry Ltd. </h5>
        <button  id="clck_to_cont" type="button" class="btn btn-lg btn-secondary mt-3">View Products</button>
      </div>
    </div>
  </div>

</body>

<?php include ($_SERVER['DOCUMENT_ROOT'].'/eveg-js/footer.php') ?>
<script src="<?php global $basedir; ?>/eveg-js/Home/home.js"></script>
