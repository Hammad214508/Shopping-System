$(document).ready(function(){

  $.fn.activate_nav_bar = function(){
      $(".nav-item.active").removeClass("active");
      $("#nav-basket").addClass("active");
  }

  $.fn.button_events = function(){
    $("#continue_shopping").on("click", function(){
      window.open("/eveg-js/Shop/","_self")
    })

    $("#continue_shopping_link").on("click", function(){
      window.open("/eveg-js/Shop/","_self")
    })


    $("#clear_basket").on("click", function(){
      createEmptyBasket();
      window.open("/eveg-js/Shop/","_self")
    })

    $("#order").on("click", function(){
      window.open("/eveg-js/Order/","_self")
    })

  }

  $.fn.roundToTwo = function(num){
    return +(Math.round(num + "e+2")  + "e-2");
  }


  $.fn.show_price = function(){
    var totals = calculateTotals();
    $("#price").append('Total ex VAT: ' + $.fn.roundToTwo(totals["totalnovat"]) +
                      ' includes VAT: ' + $.fn.roundToTwo(totals["vat"]) +
                      ' Total inc. VAT: ' + $.fn.roundToTwo(totals["total"]))
  }

  $.fn.render_basket_items = function(){
    var parent = $("#basket_items");
    parent.empty();
    var basket = readBasket();
    var productDetails = getProductDetails();
    for (var product in productDetails) {
      if (basket[product] > 0) {
        parent.append($.fn.get_basket_item(productDetails, product))
      }
    }
  }

  $.fn.get_basket_item = function(productDetails, product){
    return (
      '<tr>\n'+
      ' <td><img src="../img/' + productDetails[product]["image"] + '" /></td>\n'+
      ' <td>' + productDetails[product]["name"] + '</td>\n'+
      ' <td>' + productDetails[product]["units"] + '</td>\n'+
      ' <td>&pound;' + productDetails[product]["price"] + '</td>\n'+
      ' <td><input name="' + product + '" id="' + product + '" type="text" value="' + basket[product] + '" style="width: 30px;" /></td>\n'+
      ' <td><input name="change' + product.toLowerCase() + '" type="button" value="change quantity" onclick="javascript:changeProductQuantity(\'' + product.toLowerCase() + '\', document.getElementById(\'' + product.toLowerCase() + '\').value)" /></td>\n'+
      '</tr>\n'
    )

  }

  var pageready = (function(){
      var thispage = {};
      thispage.init = function(){
        $.fn.activate_nav_bar();
        $.fn.button_events();
        $.fn.show_price();
        var cart_count = $("#cart_count").html();
        if (cart_count != "0"){
          $(".bskt_empty").hide();
          $(".bskt_not_empty").show();
          $.fn.render_basket_items();
        }else{
          $(".bskt_empty").show();
          $(".bskt_not_empty").hide();
        }

      };

      return thispage;
  })();

  pageready.init();

});
