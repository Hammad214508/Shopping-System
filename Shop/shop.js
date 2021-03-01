$(document).ready(function(){
    var search = $("#search").val();
    var food_items = ["carrots", "bananas", "coconut", "apples",
                    "cherries", "tomatoes", "potatoes", "beans"];
    var category = "all";
    var price = 5;

    $.fn.getUrlVars = function(){
      var vars = [], hash;
      var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
      for(var i = 0; i < hashes.length; i++){
          hash = hashes[i].split('=');
          vars.push(hash[0]);
          vars[hash[0]] = hash[1];
      }
      return vars;
    }

    $.fn.activate_nav_bar = function(){
        $(".nav-item.active").removeClass("active");
        $("#nav-products").addClass("active");
    }

    $.fn.isNumeric = function(str) {
      if (typeof str != "string"){
        return false
      }
      return !isNaN(str) && !isNaN(parseInt(str)) && Math.floor(str) == str
    }

    $.fn.render_products = function(){
      parent = $("#products_table")
      parent.empty();
      var productDetails = getProductDetails();
      var i = 0;
      filter = $("#search").val();
      for (var product in productDetails) {
        if (category != "all"){
          if (productDetails[product]["category"] == category && productDetails[product]["price"] < price){
            if (product.toLowerCase().indexOf(filter) > -1){
              if (i%4 == 0){
                var row = $('<div class="row">');
                parent.append(row)
              }
              row.append($.fn.get_product(productDetails, product));
              i += 1
            }
          }
        }else{
          if (product.toLowerCase().indexOf(filter) > -1 && productDetails[product]["price"] < price){
            if (i%4 == 0){
              var row = $('<div class="row">');
              parent.append(row)
            }
            row.append($.fn.get_product(productDetails, product));
            i += 1
          }
        }
      }

      if(i == 0){
        $("#no_res").show();
        $("#search_txt").html($("#search").val())
      }else{
        $("#no_res").hide();
      }


      $(".add_to_basket").on("click", function(){
        var product_name = $(this).attr("ref").toLowerCase();
        var product_quantity = $("#"+product_name+"_quantity").val();
        if ($.fn.isNumeric(product_quantity)){
          addToBasket(product_name, product_quantity);
          $("#basket_confirmation").show();
          var num_items = parseInt($("#cart_count").html())
          var txt = num_items == 1 ? "item" : "items"
          $("#item_count").html("("+num_items+" "+txt+")");
          $("#preview_img").attr("src", "../img/"+  productDetails[product_name]["image"])
          var totals = calculateTotals();
          $("#basket_price").html("&pound;"+$.fn.roundToTwo(totals["total"]))
          $("#added_"+product_name).show();
          window.scrollTo(0,0);
        }
      })
    }

    $.fn.roundToTwo = function(num){
      return parseFloat(Math.round(num + "e+2")  + "e-2").toFixed(2);;
    }


    $.fn.get_product = function(productDetails, product){
      return (
        '<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 mb-2">'+
        '  <div class="mypanel text-center" >'+
        '    <img src="../img/'+ productDetails[product]["image"]+'" class="img-responsive" width="100px" height="90px" style="border:1px solid black;">'+
        '    <h4 class="text-dark">'+productDetails[product]["name"]+'</h4>'+
        '    <p style="font-size:12px; margin-bottom:0.5rem;">'+ productDetails[product]["description"]+'</p>'+
        '    <h6>'+ productDetails[product]["units"]+'</h6>'+
        '    <h6> Price: <strong>&pound;' + productDetails[product]["price"]+'</strong></h6>'+
        '    <h6>Quantity: <input id="'+productDetails[product]["name"].toLowerCase()+'_quantity" type="number" min="1" value="1" style="width: 40px;"> </h6>'+
        '    <span id="added_'+productDetails[product]["name"].toLowerCase()+'" style="color:green; font-size:10px; display:none;"> <i class="fa fa-check mt-1 mb-1" aria-hidden="true"></i> Added to Basket</span><br>'+
        '    <button ref="'+productDetails[product]["name"]+'" type="button" class="btn btn-success add_to_basket">Add to Basket</button>'+
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


            $("#search_btn").on("click", function(){
              event.preventDefault();
              search = $("#search").val();
              $.fn.render_products();
            })

            $("#search").keyup(function(e){
              if (($(this).val()) == ""){
                search = $(this).val();
                $.fn.render_products();
              }
              if (e.which == 13){
                search = $(this).val();
                $.fn.render_products();
              }
            });


            if (location.search){
              search_text = $.fn.getUrlVars();
              txt = search_text["search"];
              $("#search").val(txt);
              search =   $("#search").val();
              $.fn.render_products();

            }

            $("#category").on("change", function(){
              category = $(this).val();
              $.fn.render_products()
            })

            $("#more").on("click", function(){
              $("#filters").slideToggle("slow");
            })

            $('#price_slider').val(5)

            $('#price_slider').on('input', function(){
              $('#price_val').html("£"+$('#price_slider').val());
            });

            $('#price_slider').on('change', function(){
              price = $(this).val()
              $.fn.render_products()
            });


            $("#search_btn1").on("click", function(){
              $("#search").val($("#search1").val())
              $.fn.render_products()
            })

            $("#search1").on("keyup", function(e){
              if (e.key === 'Enter' || e.keyCode === 13) {
                $("#search").val($("#search1").val())
                $.fn.render_products()
              }
            })

        };

        return thispage;
    })();

    pageready.init();

});
