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
      })
    }

    $.fn.get_product = function(productDetails, product){
      return (
        '<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12 mb-2">'+
        '  <div class="mypanel text-center" >'+
        '    <img src="../img/'+ productDetails[product]["image"]+'" class="img-responsive">'+
        '    <h4 class="text-dark">'+productDetails[product]["name"]+'</h4>'+
        '    <h6>'+ productDetails[product]["description"]+'</h6>'+
        //'     <h5 class="text-danger">&#8377; <?php echo $row["price"]; ?>/-</h5>'+
        '    <h6>'+ productDetails[product]["units"]+'</h6>'+
        '    <h6> &pound;' + productDetails[product]["price"]+'</h6>'+
        '    <h6>Quantity: <input id="'+productDetails[product]["name"].toLowerCase()+'_quantity" type="number" min="1" value="1" style="width: 40px;"> </h6>'+
        '    <button ref="'+productDetails[product]["name"]+'" type="button" class="btn btn-success add_to_basket">Add to Basket</button>'+
        '  </div>'+
        '</div>'
      )
    }

    // $.fn.get_product1 = function(productDetails, product){
    //   return (
    //     '<tr>\n'+
    //     '  <td><img src="../img/' + productDetails[product]["image"] +'"/></td>\n'+
    //     '  <td>' + productDetails[product]["name"] + '</td>\n'+
    //     '  <td>' + productDetails[product]["description"] + '</td>\n'+
    //     '  <td>' + productDetails[product]["units"] + '</td>\n'+
    //     '  <td><input name="' + product + '" id="' + product + '" type="text" value="" style="width: 30px;" /></td>\n'+
    //     '  <td><input name="add' + product + '" type="button" value="add to basket" onclick="javascript:addToBasket(\'' + product + '\', document.getElementById(\'' + product + '\').value)" /></td>\n'+
    //     '</tr>\n'
    //   )
    // }

    var pageready = (function(){
        var thispage = {};
        thispage.init = function(){
            $.fn.activate_nav_bar();

            $.fn.render_products();

            $("#view_basket").on("click", function(){
              window.open("/eveg-js/Basket/","_self")
            })
        };

        return thispage;
    })();

    pageready.init();

});
