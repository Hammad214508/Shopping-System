<head>
    <title>Contact</title>
    <?php include ($_SERVER['DOCUMENT_ROOT'].'/eveg-js/header.php') ?>
</head>

<body>
  <?php include ($_SERVER['DOCUMENT_ROOT'].'/eveg-js/navigation.php');?>

  <div class="container-fluid">
       <div class="jumbotron">
           <h1> Contact </h1>
           <p>Contact us from here</p>
       </div>
   </div>

   <div id="form_success" class="container mb-3" style="display:none;">
     <div class="col-md-5 alert alert-success" role="alert" style="float: none; margin: 0 auto;">
       <strong>Thank you for getting in touch!</strong><br>
       We have received your message. One of our colleagues will get back in touch with you soon!
     </div>
   </div>

   <div class="container" >
       <div class="col-md-5 mb-5 text-center" style="float: none; margin: 0 auto; border:1px solid black;  background-color:#e9ecef;">
           <h3 class="mt-3 text-center mb-3" style="font-size: 30px;"> Contact Form</h3>
           <form id="contact_form" name="contact_form">
             <input id="name" type="text" class="form-control form-group" id="name" name="name" placeholder="Name" required autofocus="">
             <input id="email" type="email" class="form-control form-group" id="email" name="email" placeholder="Email" required>
             <input id="subject" type="text" class="form-control form-group" id="subject" name="subject" placeholder="Subject" required>
             <textarea id="message" class="form-control form-group" type="textarea" id="message" name="message" placeholder="Message" maxlength="140" rows="7" required></textarea>
             <span class="text-left" style="font-size:12px;"><p>Max Character length : 140 </p></span>

             <button id="submit" type="submit" class="btn btn-secondary mb-3">Submit </button>
           </form>

       </div>
   </div>



</body>

<?php include ($_SERVER['DOCUMENT_ROOT'].'/eveg-js/footer.php') ?>
<script src="<?php global $basedir; ?>/eveg-js/Contact/contact.js"></script>
