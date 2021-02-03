<head>
    <title>Order</title>
    <?php include ($_SERVER['DOCUMENT_ROOT'].'/eveg-js/header.php') ?>
</head>

<body onload="createEmptyOrder();">
  <?php include ($_SERVER['DOCUMENT_ROOT'].'/eveg-js/navigation.php');?>

  <div class="container-fluid">
    <h3>Address form</h3>
    <hr style="width: 400px; margin-left:0;">
    <!-- <hr style="width:400px;height:1px;border-width:0;color:gray;background-color:gray;margin-left:0;"> -->
    <div class="mb-3">
        <span>Title</span><br>
        <select class="custom-select mr-sm-2 mt-2" id="title" style="width: 90px;">
          <option value="0" selected>Title</option>
          <option value="1">Mr</option>
          <option value="2">Mrs</option>
          <option value="3">Miss</option>
          <option value="4">Ms</option>
          <option value="5">Dr</option>
          <option value="6">Other</option>
        </select>
    </div>

    <div class="container-fluid mb-4">
      <div class="row">
        Name:
      </div>
      <div class="row mt-2">
        <input type="text" class="form-control" style="width:20em;"  placeholder="First Name">
      </div>
      <div class="row mt-2">
        <input type="text" class="form-control" style="width:20em;"  placeholder="Surname">
      </div>
    </div>

    <div class="container-fluid mb-4">
      <div class="row">
        Contact Address:
      </div>
      <div class="row mt-2">
        <input type="text" class="form-control" style="width:20em;"  placeholder="Street address">
      </div>
      <div class="row mt-2">
        <input type="text" class="form-control" style="width:20em;"  placeholder="Street address line 2">
      </div>
      <div class="row mt-2">
          <input type="text" class="form-control" style="width:20em;"  placeholder="Postcode">
      </div>
      <div class="row mt-2">
          <input type="text" class="form-control" style="width:20em;"  placeholder="City">
      </div>
      <div class="row mt-2">
          <input type="text" class="form-control" style="width:20em;"  placeholder="Country">
      </div>
    </div>

    <h3 class="mt-3">Payment form</h3>
    <hr style="width: 700px; margin-left:0;">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="credit-card-div">
            <div class="panel panel-default">
              <div class="panel-heading">
              <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                      <h5 class="text-muted"> Credit Card Number</h5>
                  </div>
                  <div class="col-md-3 col-sm-3 col-xs-3">
                      <input type="text" class="form-control" placeholder="0000" required="" />
                  </div>
                  <div class="col-md-3 col-sm-3 col-xs-3">
                      <input type="text" class="form-control" placeholder="0000" required="" />
                  </div>
                  <div class="col-md-3 col-sm-3 col-xs-3">
                      <input type="text" class="form-control" placeholder="0000" required="" />
                  </div>
                  <div class="col-md-3 col-sm-3 col-xs-3">
                      <input type="text" class="form-control" placeholder="0000" required="" />
                  </div>
              </div>
              <div class="row  mt-3">
                  <div class="col-md-3 col-sm-3 col-xs-3">
                      <span class="help-block text-muted small-font"> Expiry Month</span>
                      <input type="text" class="form-control" placeholder="MM" required="" />
                  </div>
                  <div class="col-md-3 col-sm-3 col-xs-3">
                      <span class="help-block text-muted small-font">  Expiry Year</span>
                      <input type="text" class="form-control" placeholder="YY" required="" />
                  </div>
                  <div class="col-md-3 col-sm-3 col-xs-3">
                      <span class="help-block text-muted small-font">  CCV</span>
                      <input type="text" class="form-control" placeholder="CCV" required="" />
                  </div>
                  <div class="col-md-3 col-sm-3 col-xs-3"><br>
                    <i class="fa fa-credit-card-alt" style="font-size:36px"></i>
                  </div>
              </div>
              <div class="row mt-3">
                  <div class="col-md-12 pad-adjust">
                      <input type="text" class="form-control" placeholder="Name On The Card" required="" />
                  </div>
              </div>
              <div class="row mt-4">
                  <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust">
                   <a href="payment.php"><input type="submit" class="btn btn-danger btn-block" value="CANCEL" required="" /></a>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust">
                    <a href="COD.php"><input type="submit" class="btn btn-success btn-block" value="PAY NOW" required="" /></a>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



    <form style="display:none">
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

</body>

<?php include ($_SERVER['DOCUMENT_ROOT'].'/eveg-js/footer.php') ?>
<script src="<?php global $basedir; ?>/eveg-js/Order/order.js"></script>
