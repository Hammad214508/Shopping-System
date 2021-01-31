<head>
    <title>Order</title>
    <?php include ($_SERVER['DOCUMENT_ROOT'].'/eveg-js/header.php') ?>
</head>

<body style="background-color: #bbb;" onload="createEmptyOrder();">
  <?php include ($_SERVER['DOCUMENT_ROOT'].'/eveg-js/navigation.php');?>

  <div class="container-fluid">
    <form>
      <table>
       <tr>
         <td>
           Title: <input type="text" name="title" id="title" value="" style="width: 20px;" />
           First Name: <input type="text" name="firstname" id="firstname" value="" style="width: 120px;" />
           Surname: <input type="text" name="surname" id="surname" value="" style="width: 120px;" />
         </td>
       </tr>
       <tr>
         <td>
           Number: <input type="text" name="number" id="number" value="" style="width: 30px;" />
           Street: <input type="text" name="street" id="street" value="" style="width: 120px;" />
         </td>
       </tr>
       <tr>
         <td>
           Postcode: <input type="text" name="postcode" id="postcode" value="" style="width: 40px;" />
           City: <input type="text" name="city" id="city" value="" style="width: 120px;" />
           Country: <input type="text" name="country" id="country" value="" style="width: 120px;" />
         </td>
       </tr>
       <tr>
         <td>
           Card Type:
          <div style="display: inline-block;">
            <input type="radio" name="cardtype" id="solo" value="Solo" /> Solo<br />
            <input type="radio" name="cardtype" id="switch" value="Switch" /> Switch<br />
            <input type="radio" name="cardtype" id="mastercard" value="Mastercard" /> Mastercard<br />
            <input type="radio" name="cardtype" id="visa" value="Visa" /> Visa
          </div>
           Card Number: <input type="text" name="cardnumber" id="cardnumber" value="" style="width: 120px;" />
           Expiry Date: <input type="text" name="month" id="month" value="" style="width: 10px;" /> <input type="text" name="year" id="year" value="" style="width: 10px;" />
         </td>
       </tr>
       <tr>
         <td style="text-align: center;">
           <button id="cancel" type="button" class="btn btn-secondary">Cancel</button>
           <button id="proceed" type="button" class="btn btn-secondary">Proceed</button>
         </td>
       </tr>
      </table>
    </form>
  </div>
</body>

<?php include ($_SERVER['DOCUMENT_ROOT'].'/eveg-js/footer.php') ?>
<script src="<?php global $basedir; ?>/eveg-js/Order/order.js"></script>
