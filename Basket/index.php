<head>
  <title>Basket</title>
  <?php include ($_SERVER['DOCUMENT_ROOT'].'/eveg-js/header.php') ?>
</head>
<body>
  <?php include ($_SERVER['DOCUMENT_ROOT'].'/eveg-js/navigation.php');?>
  <div class="container-fluid mb-5">
    <form>
      <table>
        <script>
          var basket = readBasket();
          var productDetails = getProductDetails();
          for (var product in productDetails) {
            if (basket[product] > 0) {
              document.write('       <tr>\n');
              document.write('         <td><img src=<?php global $basedir?>"/eveg-js/img/' + productDetails[product]["image"] + '" /></td>\n');
              document.write('         <td>' + productDetails[product]["name"] + '</td>\n');
              document.write('         <td>' + productDetails[product]["units"] + '</td>\n');
              document.write('         <td>&pound;' + productDetails[product]["price"] + '</td>\n');
              document.write('         <td><input name="' + product + '" id="' + product + '" type="text" value="' + basket[product] + '" style="width: 30px;" /></td>\n');
              document.write('         <td><input name="change' + product + '" type="button" value="change quantity" onclick="javascript:changeProductQuantity(\'' + product + '\', document.getElementById(\'' + product + '\').value)" /></td>\n');
              document.write('       </tr>\n');
            }
          }
        </script>
      </table>
    </form>

    <script>
      var totals = calculateTotals();
      document.write('<p>Total ex VAT: ' + totals["totalnovat"] + ' includes VAT: ' + totals["vat"] + ' Total inc. VAT: ' + totals["total"] + '</p>\n');
    </script>

    <button id="continue_shopping" type="button" class="btn btn-secondary">Continue Shopping</button>
    <button id="clear_basket" type="button" class="btn btn-secondary">Clear Basket</button>
    <button id="order" type="button" class="btn btn-secondary">Order</button>

  </div>
</body>


<?php include ($_SERVER['DOCUMENT_ROOT'].'/eveg-js/footer.php') ?>
<script src="<?php global $basedir; ?>/eveg-js/Basket/basket.js"></script>
