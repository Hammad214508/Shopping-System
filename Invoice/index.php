<head>
  <title>Invoice</title>
  <?php include ($_SERVER['DOCUMENT_ROOT'].'/eveg-js/header.php') ?>
</head>

<body>
  <?php include ($_SERVER['DOCUMENT_ROOT'].'/eveg-js/navigation.php');?>
  <div class="container-fluid" style="height: 100%; font-family: monospace;">
    <script>
      document.write('    <textarea style="width: 100%; height: 100%;">\n');
      document.write('                                  INVOICE\n\n\n');
      clientName = getName();
      document.write('       for ' + clientName['title'] + ' ' + clientName['firstname'] + ' ' + clientName['surname'] + '\n');
      address = getAddress();
      document.write('       ' + address['number'] + ' ' + address['street'] + '\n');
      document.write('       ' + address['city'] + ' ' + address['postcode'] + '\n');
      document.write('       ' + address['country'] + '\n\n\n');
      document.write('      ------------------------------------------------------------------------------\n');
      basket = readBasket();
      productDetails = getProductDetails();

      for (var product in basket) {
        if (basket[product] > 0) {
          document.write('       ' + productDetails[product]["name"] + '   ' + productDetails[product]["units"] + '\n');
          document.write('                                       &pound;' + productDetails[product]["price"] + '\n');
        }
      }
      document.write('      ------------------------------------------------------------------------------\n');
      document.write('       TOTAL\n');
      var totals = calculateTotals();
      document.write('         ' + totals["total"] + ' inc. VAT\n');
      document.write('         ' + totals["vat"] + ' ex. VAT\n');
      document.write('         ' + totals["totalnovat"] + ' VAT paid\n\n');

      cardDetails = getCardDetails();
      document.write('         Paid by ' + cardDetails['cardtype'] + ' ' + cardDetails['cardnumber'].substr(-4) + ' (only last four digits given)\n');
      document.write('      ------------------------------------------------------------------------------\n');
      document.write('    </textarea>\n');
      </script>
    </div>
</body>

<?php include ($_SERVER['DOCUMENT_ROOT'].'/eveg-js/footer.php') ?>
<script src="<?php global $basedir; ?>/eveg-js/Invoice/invoice.js"></script>
