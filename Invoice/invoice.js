$(document).ready(function(){

  var bootstrap_grid_size;

  $.fn.get_bootstrap_grid = function(width){
    if(width < 768){
       return "xs";
    }else if(width <= 991){
      return "sm";
    }else if(width <= 1199){
      return "md";
    }else{
      return "lg";
    }
  }

  bootstrap_grid_size = $.fn.get_bootstrap_grid($(window).width());

  $.fn.render_client_name = function(){
    var clientName = getName();

    title = clientName['title'] == "Title" ? "" : clientName['title'];
    $("#title").html(title);
    $("#firstname").html(clientName['firstname']);
    $("#surname").html(clientName['surname']);
  }


  $.fn.render_client_address = function(){
    var address = getAddress();

    $("#number").html(address['number']);
    $("#street").html(address['street']);
    $("#city").html(address['city']);
    $("#postcode").html(address['postcode']);
    $("#country").html(address['country']);
  }

  $.fn.render_date_time = function(){
    dateObj = new Date();
    month = String(dateObj.getMonth()+1).padStart(2, '0');
    day = String(dateObj.getDate()).padStart(2, '0');
    year = dateObj.getFullYear();
    $("#date").html(day  + '/'+ month  + '/' + year);
    $("#time").html(dateObj.toLocaleTimeString())
  }


  $.fn.render_products = function(){
    var basket = readBasket();
    var productDetails = getProductDetails();
    parent = $("#products")
    parent.empty()
    for (var product in basket) {
      if (basket[product] > 0) {
        var qty = basket[product];
        var name = productDetails[product]["name"] + ' ' + productDetails[product]["units"];
        var price = productDetails[product]["price"];
        var amount = qty*price
        if(bootstrap_grid_size == "xs" || bootstrap_grid_size == "sm"){
          $("#sm_header").show();
          $("#lg_header").hide();
          parent.append($.fn.product_template_small(qty, name, price, amount))
        }else{
          $("#sm_header").hide();
          $("#lg_header").show();
          parent.append($.fn.product_template(qty, name, price, amount))
        }

      }
    }
  }

  $.fn.product_template = function(qty, name, unit_price, amount){
    return (
      '<div class="row">'+
      '  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3">'+
      '    <p>'+qty+'</p>'+
      '  </div>'+
      '  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3">'+
      '    <p>'+name+'</p>'+
      '  </div>'+
      '  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3">'+
      '    <p>&pound;'+unit_price+'</p>'+
      '  </div>'+
      '  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3">'+
      '    <p> &pound;'+amount+'</p>'+
      '  </div>'+
      '</div>'
    )
  }

  $.fn.product_template_small = function(qty, name, unit_price, amount){
    return (
      '<p>'+qty+'x <strong>'+name+' </strong>'+ amount+'</p>'
    )
  }

  $.fn.roundToTwo = function(num){
    return parseFloat(Math.round(num + "e+2")  + "e-2").toFixed(2);;
  }


  $.fn.render_price = function(){
    var totals = calculateTotals();
    $("#price").html("&pound;"+  $.fn.roundToTwo(totals["total"]))
    $('#ex_vat').html("ex. Vat &pound;"+$.fn.roundToTwo(totals["totalnovat"]))

  }


  $.fn.render_card_details = function(){
    var cardDetails = getCardDetails();
    $("#card_type").html(cardDetails['cardtype'] + ' ' + cardDetails['cardnumber'].substr(-4))

  }


  $(window).on('resize',function(){
    new_grid_size = $.fn.get_bootstrap_grid($(window).width());
    if (new_grid_size != bootstrap_grid_size){
      bootstrap_grid_size = new_grid_size;
      $.fn.render_products();
    }
  });



  var pageready = (function(){
      var thispage = {};
      thispage.init = function(){
        // CLIENT NAME
        $.fn.render_client_name();

        // CLIENT ADDRESS
        $.fn.render_client_address();

        // CURRENT DATE
        $.fn.render_date_time();

        // PRODUCTS
        $.fn.render_products();

        // PRICE
        $.fn.render_price();

        // CARD DATA
        $.fn.render_card_details();

      };

      return thispage;
  })();

  pageready.init();

});
