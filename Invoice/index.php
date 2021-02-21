<head>
  <title>Invoice</title>
  <?php include ($_SERVER['DOCUMENT_ROOT'].'/eveg-js/header.php') ?>
</head>

<body>
  <?php include ($_SERVER['DOCUMENT_ROOT'].'/eveg-js/navigation.php');?>

  <button onclick="topFunction()" id="scroll_top" title="Go to top">
    <i class="fa fa-chevron-up" aria-hidden="true"></i>
  </button>
  
  <div class="container-fluid mb-5">
    <div class="row">
      <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xs-8">
        <div id="content" class="p-4 a4 html-content">

          <div class="row jumbotron">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 my-auto">
              <h1>Invoice</h1>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xs-8 text-right">
              <img style="max-width:150px; max-height:150px;width: auto;height: auto;" src="../logo.png">

            </div>
          </div>

          <div class="row mt-4">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4" >
              <h5>For</h5>
              <p style="font-family: monospace;">
                <span id="title"></span>
                <span id="firstname"></span>
                <span id="surname"></span>
              </p>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <h5>Ship to</h5>
                <p style="font-family: monospace;">
                  <span id="number"></span> <span id="street"></span> <br>
                  <span id="city"></span> <span id="postocode"></span> <br>
                  <span id="country"></span></span>
                </p>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4">
              <h5>Order placed</h5>
                <p style="font-family: monospace;">
                  <strong>Date:</strong> <span id="date"></span> <br>
                  <strong>Time:</strong> <span id="time"></span> <br>
                </p>

            </div>
          </div>

          <hr>

          <div class="row mt-4">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3">
              <h5>Qty</h5>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3">
              <h5>Product</h5>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3">
              <h5>Unit Price</h5>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3">
              <h5>Amount</h5>
            </div>
          </div>

          <hr>
          <div id="products"></div>

          <div class="row mt-2">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6"></div>

            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3">
              <h3>Total</h3>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3">
              <h3 id="price"></h3>
              <p id="ex_vat" style="font-size:12px"></p>
            </div>
          </div>

          <hr>

          <h6> Paid by <span id="card_type"></span> (only last four digits given)</h6>

          <div class="text-center mt-5">
              <p class="display-3" style="font-family: 'Brush Script MT', cursive;">Thank you</p>
          </div>

          <div class="container mb-2 mt-3" style="background-color:#e9ecef; height:2em;"></div>

        </div>
      </div>


      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4">
        <button onclick="CreatePDFfromHTML()" class="btn btn-secondary">Generate PDF</button> <br>
        <button onclick="print()" class="btn btn-secondary mt-3">Print Invoice</button>
      </div>

    </div>


</body>

<?php include ($_SERVER['DOCUMENT_ROOT'].'/eveg-js/footer.php') ?>
<script src="<?php global $basedir; ?>/eveg-js/Invoice/invoice.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
<script type="text/javascript" src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
<script type="text/javascript">
function CreatePDFfromHTML() {
  var HTML_Width = $(".html-content").width();
  var HTML_Height = $(".html-content").height();
  var top_left_margin = 15;
  var PDF_Width = HTML_Width + (top_left_margin * 2);
  var PDF_Height = (PDF_Width * 1.5) + (top_left_margin * 2);
  var canvas_image_width = HTML_Width;
  var canvas_image_height = HTML_Height;

  var totalPDFPages = Math.ceil(HTML_Height / PDF_Height) - 1;

  html2canvas($(".html-content")[0]).then(function (canvas) {
      var imgData = canvas.toDataURL("image/jpeg", 1.0);
      var pdf = new jsPDF('p', 'pt', [PDF_Width, PDF_Height]);
      pdf.addImage(imgData, 'JPG', top_left_margin, top_left_margin, canvas_image_width, canvas_image_height);
      for (var i = 1; i <= totalPDFPages; i++) {
          pdf.addPage(PDF_Width, PDF_Height);
          pdf.addImage(imgData, 'JPG', top_left_margin, -(PDF_Height*i)+(top_left_margin*4),canvas_image_width,canvas_image_height);
      }
      pdf.save("Invoice"+ (+ new Date())+".pdf");
  });
}
</script>
