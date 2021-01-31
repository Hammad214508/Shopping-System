<head>
    <title>Shop</title>
    <?php include ($_SERVER['DOCUMENT_ROOT'].'/eveg-js/header.php') ?>
</head>

<body>
  <?php include ($_SERVER['DOCUMENT_ROOT'].'/eveg-js/navigation.php');?>
  <div class="container-fluid mb-5">
    <form>
      <table>
        <script>
          var productDetails = getProductDetails();
          for (var product in productDetails) {
            document.write('       <tr>\n');
            document.write('         <td><img src=<?php global $basedir?>"/eveg-js/img/' + productDetails[product]["image"] + '" /></td>\n');
            document.write('         <td>' + productDetails[product]["name"] + '</td>\n');
            document.write('         <td>' + productDetails[product]["description"] + '</td>\n');
            document.write('         <td>' + productDetails[product]["units"] + '</td>\n');
            document.write('         <td><input name="' + product + '" id="' + product + '" type="text" value="" style="width: 30px;" /></td>\n');
            document.write('         <td><input name="add' + product + '" type="button" value="add to basket" onclick="javascript:addToBasket(\'' + product + '\', document.getElementById(\'' + product + '\').value)" /></td>\n');
            document.write('       </tr>\n');
          }
        </script>
      </table>
    </form>

    <button id="view_basket" type="button" class="btn btn-secondary">View Basket</button>
  </div>

</body>

<?php include ($_SERVER['DOCUMENT_ROOT'].'/eveg-js/footer.php') ?>
<script src="<?php global $basedir; ?>/eveg-js/Shop/shop.js"></script>
