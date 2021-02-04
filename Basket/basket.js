$(document).ready(function(){
  var productDetails;
  var basket;
  var deleted_items = {}

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

    $(".checkout").on("click", function(){
      window.open("/eveg-js/Order/","_self")
    })

  }

  $.fn.roundToTwo = function(num){
    return parseFloat(Math.round(num + "e+2")  + "e-2").toFixed(2);;
  }


  $.fn.show_price = function(){
    var totals = calculateTotals();
    parent = $("#price");
    parent.empty();
    var num_items = parseInt($("#cart_count").html())
    var txt = num_items == 1 ? "item" : "items"
    parent.append(
      '<div class="row">'+
      '  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12  align-self-end">'+
      '    <div class="text-right">'+
      '      <span>Subtotal ('+num_items+' '+txt+'): <strong>&pound;'+$.fn.roundToTwo(totals["total"])+'</strong><span> <br>'+
      '     <span style="font-size:12px;">ex VAT '+ $.fn.roundToTwo(totals["totalnovat"])+' </span>'+
      '    </div>'+
      '  </div>'+
      '</div>'
    )

    $("#num_items_2").html(num_items+" "+txt);
    $("#price_2").html($.fn.roundToTwo(totals["total"]));
    $("#ex_vat_2").html("ex VAT "+ $.fn.roundToTwo(totals["totalnovat"]))

  }

  $.fn.render_basket_items = function(){
    var parent = $("#basket_items");
    parent.empty();
    basket = readBasket();
    productDetails = getProductDetails();
    parent.append("<hr>")
    for (var product in productDetails) {
      if (basket[product] > 0) {
        parent.append($.fn.get_basket_item(product))
        parent.append('<hr>')
      }
    }
  }

  $.fn.get_basket_item = function(product){
    var name = productDetails[product]["name"];
    return (
      '<div id="undo_'+name.toLowerCase()+'" style="display:none;">'+name+' removed succesfully. <button ref="'+name.toLowerCase()+'" type="button" class="btn btn-link undo_dl">Undo</button></div>'+
      '<div id="'+name.toLowerCase()+'_row" class="row">'+
      '  <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-xs-12">'+
      '    <img src="../img/' + productDetails[product]["image"] + '" class="img-fluid" alt="Image" width="100px" height="90px" style="border:1px solid black;"/>'+
      '  </div>'+
      '  <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-xs-12">'+
      '    <h4>' + name + '</h4>'+
      '    <span class="text-info">'+ productDetails[product]["description"]+'</span><br>'+
      '    <span>' + productDetails[product]["units"] + '</span> for'+
      '    <span style="color:#8b0000;">&pound;' + productDetails[product]["price"] + '</span>'+
      '    <br>'+
      '    <span>Qty: </span> <input id="quantity'+name.toLowerCase()+'" ref="'+name.toLowerCase()+'" class="quantity" type="number" min="1" value="' + basket[product] + '" style="width: 40px;">'+
      '    <span class="ml-3" style="border-left:1px solid black;"></span>'+
      '    <button ref="'+name.toLowerCase()+'" type="button" class="btn btn-link dl_item">Delete</button>'+
      '  </div>'+
      '  <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-xs-12">'+
      '    <div class="text-right">'+
      '      <strong id="total_price_'+name.toLowerCase()+'">&pound;'+ $.fn.roundToTwo(basket[product]*productDetails[product]["price"])+'</strong>'+
      '    </div>'+
      '  </div>'+
      '</div>'
    )
  }

  $.fn.basket_item_events = function(){
    $(".quantity").on("change", function(){
      var item = $(this).attr("ref");
      $("#total_price_"+item).html("&pound;" + $.fn.roundToTwo($(this).val()*productDetails[item]["price"]))
      changeProductQuantity(item, $(this).val());
      basket = readBasket();
      $.fn.show_price();
    })

    $(".dl_item").on("click", function(){
      var item = $(this).attr("ref");
      deleted_items[item] = basket[item]
      removeProductFromBasket(item);
      basket = readBasket();
      $("#"+item+"_row").hide();
      $("#undo_"+item).show();
      $.fn.show_price();
    })

    $(".undo_dl").on("click", function(){
      var item = $(this).attr("ref");
      basket[item] = deleted_items[item];
      addToBasket(item, basket[item])
      $("#quantity_"+item).val(basket[item])
      $("#"+item+"_row").show();
      $("#undo_"+item).hide();
      $.fn.show_price();
    })

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
          $.fn.basket_item_events();
        }else{
          $(".bskt_empty").show();
          $(".bskt_not_empty").hide();
        }

      };

      return thispage;
  })();

  pageready.init();

});
