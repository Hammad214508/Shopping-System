<head>
    <title>Order</title>
    <?php include ($_SERVER['DOCUMENT_ROOT'].'/eveg-js/header.php') ?>
</head>

<body onload="createEmptyOrder();">
  <?php include ($_SERVER['DOCUMENT_ROOT'].'/eveg-js/navigation.php');?>

  <div class="container-fluid">
    <div class="jumbotron">
       <h1>Checkout</h1>
    </div>

  </div>

  <div class="container-fluid">
    <h3>Delivery Information</h3>
    <hr style="width: 400px; margin-left:0;">
    <div class="mb-3">
        <span>Title</span><br>
        <select class="custom-select mr-sm-2 mt-2" id="title" style="width: 90px;">
          <option selected disabled hidden>Title</option>
          <option value="Mr">Mr</option>
          <option value="Mrs">Mrs</option>
          <option value="Miss">Miss</option>
          <option value="Ms">Ms</option>
          <option value="Dr">Dr</option>
          <option value="Other">Other</option>
        </select>
    </div>

    <form id="full_form" name="full_form">
    <div class="container-fluid mb-4">
      <div class="row">
        Name: <span aria-hidden="true" style="color:red">*</span>
      </div>
      <div class="row mt-2">
        <p>
          <input id="firstname" name="firstname" type="text" class="form-control order_input_size" required minlength="2" placeholder="First Name" autofocus>
        </p>
      </div>
      <div class="row">
        <p>
          <input id="surname" name="surname" type="text" class="form-control order_input_size" required minlength="2" placeholder="Surname">
        </p>
      </div>
    </div>

    <div class="container-fluid mb-4">
      <div class="row">
        Contact Address: <span aria-hidden="true"  style="color:red">*</span>
      </div>
      <div class="row mt-2">
        <p>
          <input id="number" name="number" type="text" class="form-control order_input_size" required placeholder="House number">
        </p>
      </div>
      <div class="row">
        <p>
          <input id="street" name="street" type="text" class="form-control order_input_size" required minlength="2"  placeholder="Street address">
        </p>
      </div>
      <div class="row">
        <p>
          <input id="postcode" name="postcode" type="text" class="form-control order_input_size" required minlength="2" placeholder="Postcode">
        </p>
      </div>
      <div class="row">
        <p>
          <input id="city" name="city" type="text" class="form-control order_input_size" required minlength="2"  placeholder="City">
        </p>
      </div>
      <div class="row autocomplete">
        <p>
          <input id="country" name="country" type="search" class="form-control order_input_size" required minlength="2" placeholder="Country">
        </p>
      </div>
    </div>

    <h3 class="mt-3">Payment Information</h3>
    <hr style="width: 500px; margin-left:0;">
    <div class="container-fluid">
    <div class="row mb-5">
      <div class="col-xl-6 col-lg-6 col-md-11 col-sm-11 col-xs-11 col-md-offset-3">
        <div class="mb-3">
            <select class="custom-select mr-sm-2 mt-2" id="title" style="width: 150px;">
              <option selected disabled hidden>Card Type</option>
              <option id="solo" value="Solo">Solo</option>
              <option id="switch" value="Switch">Switch</option>
              <option id="mastercard" value="Mastercard">Mastercard</option>
              <option id="visa" value="Visa">Visa</option>
            </select>
        </div>
        <div class="credit-card-div p-4" style="background-color:#e9ecef; border-radius: 25px;">
            <div class="panel panel-default">
              <div class="panel-heading">
                  <div class="row">
                    <div class="col-xl-12 col-lg-12  col-md-12 col-sm-12 col-xs-12">
                        <h5 class="text-muted"> Credit Card Number</h5>
                    </div>
                  </div>
                  <div class=" d-none d-lg-block d-md-block">
                    <div class="row">
                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <input id="card_1" name="card_1" type="text" ref="1" class="form-control credit_card_num only_numbers" required placeholder="0000" maxlength="4" minlength="4"/>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <input id="card_2" name="card_2" type="text" ref="2" class="form-control credit_card_num only_numbers" required placeholder="0000" maxlength="4" minlength="4"/>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <input id="card_3" name="card_3" type="text" ref="3" class="form-control credit_card_num only_numbers" required placeholder="0000" maxlength="4" minlength="4"/>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <input id="card_4" name="card_4" type="text" ref="4" class="form-control credit_card_num only_numbers" required placeholder="0000" maxlength="4" minlength="4"/>
                        </div>
                      </div>
                  </div>

                  <div class="d-md-none">
                    <div class="row ">
                      <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-2">
                          <input id="cc" class="form-control" type="text" data-inputmask="'mask': '9999-9999-9999-9999'" />
                        </div>
                    </div>
                  </div>
                </div>
              </div>



                <input id="cardnumber" type="text" style="display:none;">

                <div class="row  mt-3">
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col-xs-3">
                        <span class="help-block text-muted small-font" > Expiry Month</span>
                        <input id="month" name="month" type="text" class="form-control only_numbers" placeholder="MM" required maxlength="2"/>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col-xs-3">
                        <span class="help-block text-muted small-font">  Expiry Year</span>
                        <input id="year" name="year" type="text" class="form-control only_numbers" placeholder="YY" required maxlength="2"/>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col-xs-3">
                        <span class="help-block text-muted small-font">  CVV</span>
                        <input id="cvv" name="cvv" type="text" class="form-control only_numbers" placeholder="CVV" required maxlength="3"/>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 col-xs-3 mt-auto d-none d-lg-block d-md-block">
                      <i class="fa fa-credit-card-alt" style="font-size:36px"></i>
                    </div>
                </div>
                <div class="row">
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4">
                      <span id="expired" class="help-block" style="color:#8b0000; display:none; font-size:10px;"> This credit card has expired</span>
                  </div>
                </div>

                <div class="row mt-3">
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xs-8 pad-adjust">
                        <input name="card_name" type="text" class="form-control" required placeholder="Name On The Card" />
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 pad-adjust">
                      <button id="cancel" type="button" class="btn btn-danger btn-block">CANCEL</button>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 pad-adjust">
                      <button id="pay_now" type="submit" class="btn btn-success btn-block">PAY NOW</button>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>

  </div>

<script>
var countries = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua &amp; Barbuda","Argentina",
 "Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus",
 "Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia &amp; Herzegovina","Botswana","Brazil",
 "British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde",
 "Cayman Islands","Central Arfrican Republic","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica",
 "Cote D Ivoire","Croatia","Cuba","Curacao","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic",
 "Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands",
 "Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar",
 "Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras",
 "Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica",
 "Japan","Jersey","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon",
 "Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia",
 "Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","Monaco","Mongolia",
 "Montenegro","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauro","Nepal","Netherlands","Netherlands Antilles",
 "New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","North Korea","Norway","Oman","Pakistan","Palau","Palestine",
 "Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania",
 "Russia","Rwanda","Saint Pierre &amp; Miquelon","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal",
 "Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea",
 "South Sudan","Spain","Sri Lanka","St Kitts &amp; Nevis","St Lucia","St Vincent","Sudan","Suriname","Swaziland","Sweden",
 "Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad &amp; Tobago",
 "Tunisia","Turkey","Turkmenistan","Turks &amp; Caicos","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom",
 "United States of America","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands (US)",
 "Yemen","Zambia","Zimbabwe"];

autocomplete(document.getElementById("country"), countries);

</script>

</body>

<?php include ($_SERVER['DOCUMENT_ROOT'].'/eveg-js/footer.php') ?>
<script src="<?php global $basedir; ?>/eveg-js/Order/order.js"></script>
<script src="mask_input.js" type="text/javascript"></script>
