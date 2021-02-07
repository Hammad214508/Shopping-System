<head>
  <title>Home</title>
  <?php include ($_SERVER['DOCUMENT_ROOT'].'/eveg-js/header.php') ?>
</head>

<body style="background-image: linear-gradient(rgba(0, 0, 0, 1), rgba(0, 0, 0, 0.5)), url('img1.jpeg'); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;"
      onload="setupBasket();" >
  <?php include ($_SERVER['DOCUMENT_ROOT'].'/eveg-js/navigation.php');?>

  <div class="text-center" style="margin-top:14em;">
    <h1 style="color: white; font-family: URW Chancery L, cursive" class="display-4">Welcome to eVeg!</h1>
    <h2 style="color: white;" class="display-1">Fresh Organic Food</h2>
    <h5 style="color: white;">Fresh produce from the Midland's green countryside.</h5>
    <h5 style="color: white;"> &copy; 2014 InterVeg Coventry Ltd. </h5>
    <button  id="clck_to_cont" type="button" class="btn btn-lg btn-light mt-3">Products</button>

  </div>
  </span></p>
</body>

<?php include ($_SERVER['DOCUMENT_ROOT'].'/eveg-js/footer.php') ?>
<script src="<?php global $basedir; ?>/eveg-js/Home/home.js"></script>
