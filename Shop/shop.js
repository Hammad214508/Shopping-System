$(document).ready(function(){

    $.fn.activate_nav_bar = function(){
        $(".nav-item.active").removeClass("active");
        $("#nav-products").addClass("active");
    }

    $.fn.render_products = function(){
      parent = $("#products_table")
      parent.empty();
      var productDetails = getProductDetails();
      var i = 0;
      for (var product in productDetails) {
        if (i%4 == 0){
          var row = $('<div class="row">');
          parent.append(row)
        }
        row.append($.fn.get_product(productDetails, product));

        i += 1
      }

      $(".add_to_basket").on("click", function(){
        var product_name = $(this).attr("ref").toLowerCase();
        var product_quantity = $("#"+product_name+"_quantity").val();

        addToBasket(product_name, product_quantity);
        $("#basket_confirmation").show();
        var num_items = parseInt($("#cart_count").html())
        var txt = num_items == 1 ? "item" : "items"
        $("#item_count").html("("+num_items+" "+txt+")");
        $("#preview_img").attr("src", "../img/"+  productDetails[product_name]["image"])
        var totals = calculateTotals();
        $("#basket_price").html("&pound;"+$.fn.roundToTwo(totals["total"]))
        window.scrollTo(0,0)


      })
    }

    $.fn.roundToTwo = function(num){
      return +(Math.round(num + "e+2")  + "e-2");
    }


    $.fn.get_product = function(productDetails, product){
      return (
        '<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 mb-2">'+
        '  <div class="mypanel text-center" >'+
        '    <img src="../img/'+ productDetails[product]["image"]+'" class="img-responsive" width="100px" height="90px">'+
        '    <h4 class="text-dark">'+productDetails[product]["name"]+'</h4>'+
        '    <h6>'+ productDetails[product]["description"]+'</h6>'+
        '    <h6>'+ productDetails[product]["units"]+'</h6>'+
        '    <h6> Price: &pound;' + productDetails[product]["price"]+'</h6>'+
        '    <h6>Quantity: <input id="'+productDetails[product]["name"].toLowerCase()+'_quantity" type="number" min="1" value="1" style="width: 40px;"> </h6>'+
        '    <button ref="'+productDetails[product]["name"]+'" type="button" class="btn btn-success add_to_basket mt-4">Add to Basket</button>'+
        '  </div>'+
        '</div>'
      )
    }

    var pageready = (function(){
        var thispage = {};
        thispage.init = function(){
            $.fn.activate_nav_bar();

            $.fn.render_products();

            $("#view_basket, #edit_basket").on("click", function(){
              window.open("/eveg-js/Basket/","_self")
            })

            $("#cross_preview").on("click", function(){
              $("#basket_confirmation").hide();
            });

            $("#proceed_checkout").on("click", function(){
              window.open("/eveg-js/Order/","_self")
            });



        };

        return thispage;
    })();

    pageready.init();

});
