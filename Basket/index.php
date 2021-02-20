<head>
  <title>Basket</title>
  <?php include ($_SERVER['DOCUMENT_ROOT'].'/eveg-js/header.php') ?>
</head>
<body>
  <?php include ($_SERVER['DOCUMENT_ROOT'].'/eveg-js/navigation.php');?>

  <button onclick="topFunction()" id="scroll_top" title="Go to top">
    <i class="fa fa-chevron-up" aria-hidden="true"></i>
  </button>

  <script type="text/javascript">
    window.onscroll = function()
    {
      scrollFunction()
    };

    function scrollFunction(){
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("scroll_top").style.display = "block";
      } else {
        document.getElementById("scroll_top").style.display = "none";
      }
    }

    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }


  </script>

  <div class="container-fluid">
    <div class="jumbotron">
       <h1>Shopping Basket </h1>
       <p>Manage your basket here.</p>
    </div>

  </div>


  <div class="container-fluid mb-5">

    <div class="row">
      <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12">
        <div class="row bskt_not_empty">
          <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-xs-12">
            <h2>Your Products</h2>
          </div>
          <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-xs-12  align-self-end">
            <div class="text-right">
              Price
            </div>
          </div>
        </div>

        <div id="basket_items" class="bskt_not_empty" style="display:none"></div>

        <div id="basket_empty" class="bskt_empty" style="display:none">
          <h2>Your eVeg Basket is empty.</h2>
          <i class="fa fa-shopping-basket" aria-hidden="true"></i>
          <button id="continue_shopping_link" type="button" class="btn btn-link">Continue shopping</button>
        </div>


        <p id="price" class="bskt_not_empty" style="display:none"></p>

        <div id="basket_buttons" class="row bskt_not_empty mt-4" style="display:none">
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 mb-2" style="display:block">
            <button id="continue_shopping" type="button" class="btn btn-warning">Continue Shopping</button>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 mb-2">
              <button  type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">Clear Basket</button>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <button type="button" class="btn btn-success checkout">Proceed to Checkout</button>
          </div>

        </div>

      </div>
      <div id="price_info_again" class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 bskt_not_empty text-right" style="display:none">
        <div class="p-5" style="background-color:#e9ecef; margin-left: 0.4vw; display: inline-block;"  >
          <h5>
            Subtotal (<span id="num_items_2"></span>): &pound;<span id="price_2"></span>
            <br>
            <div class="text-right">
              <span style="font-size:12px;" id="ex_vat_2"></span>
            </div>
          </h5>

          <button id="order" type="button" class="btn btn-block btn-success mt-4 checkout" >Proceed to Checkout</button>

        </div>
      </div>
    </div>

  </div>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Clear Basket</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure you want to clear basket?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button id="clear_basket" type="button" class="btn btn-primary">Clear Basket</button>
      </div>
    </div>
  </div>
</div>

</body>



<?php include ($_SERVER['DOCUMENT_ROOT'].'/eveg-js/footer.php') ?>
<script src="<?php global $basedir; ?>/eveg-js/Basket/basket.js"></script>
