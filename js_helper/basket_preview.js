var timeout;

$("#nav-basket").hover(function(e) {
  if (parseInt($("#cart_count").html()) > 0){
    timeout = setTimeout(function(){
      $(".shopping-cart-items").empty()
      $.fn.render_all_items();
      $(".shopping-cart").slideDown();
    }, 400);
  }
}, function() {
  clearTimeout(timeout);
  $(".shopping-cart").hover(function(e) {
  }, function() {
      $(".shopping-cart").hide();
  });
});


$.fn.roundToTwo = function(num){
  return parseFloat(Math.round(num + "e+2")  + "e-2").toFixed(2);;
}

$("#preview_checkout").on("click", function(){
  window.open("/eveg-js/Order/","_self")
})

$.fn.render_all_items = function(){
  basket = readBasket();
  productDetails = getProductDetails();
  totals = calculateTotals();

  $("#preview_count").html($("#cart_count").html());
  $("#preview_price").html("£"+$.fn.roundToTwo(totals["total"]));

  for (var product in productDetails) {
    if (basket[product] > 0) {
      $(".shopping-cart-items").append($.fn.get_basket_preview_item(product));
    }
  }
}

$.fn.get_basket_preview_item = function(product){
  return(
    '<div class="clearfix">'+
    '<div class="row">'+
    ' <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">'+
    '   <img src="../img/' + productDetails[product]["image"] + '" alt="Image of '+product+'" />'+
    ' </div>'+
    ' <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">'+
    '   <span class="item-name">'+productDetails[product]["name"]+'</span>'+
    '   <span class="item-detail">'+productDetails[product]["description"]+'</span>'+
    '   <span class="item-price">&pound;' + productDetails[product]["price"] + '</span>'+
    '   <span class="item-quantity">Quantity: '+basket[product]+'</span>'+
    ' </div>'+
    '<div>'+
    '</div>'
  )
}
