<head>
  <title>Home</title>
  <?php include ($_SERVER['DOCUMENT_ROOT'].'/eveg-js/header.php') ?>
</head>

<body style="background-color: #bbb;" onload="setupBasket();">
  <?php include ($_SERVER['DOCUMENT_ROOT'].'/eveg-js/navigation.php');?>

  <div style="text-align: center;">
    <h1 style="color: red;">Welcome to eVeg!</h1>
    <h2 style="color: green;">
         &copy; 2014 InterVeg Coventry Ltd.
         <br />
         Fresh produce from the Midland's green countryside.
    </h2>

    <button id="clck_to_cont" type="button" class="btn btn-secondary">Click here to continue</button>

  </div>
  </span></p>
</body>

<?php include ($_SERVER['DOCUMENT_ROOT'].'/eveg-js/footer.php') ?>
<script src="<?php global $basedir; ?>/eveg-js/Home/home.js"></script>
