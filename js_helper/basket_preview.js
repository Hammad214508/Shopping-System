$("#nav-basket").hover(function(e) {
  $(".shopping-cart-items").empty()
  $.fn.render_all_items();
  $(".shopping-cart").slideDown();
}, function() {
  $(".shopping-cart").hover(function(e) {
  }, function() {
      // $(".shopping-cart").hide();
  });
});

$("#preview_checkout").on("click", function(){
  window.open("/eveg-js/Order/","_self")
})

$.fn.render_all_items = function(){
  basket = readBasket();
  productDetails = getProductDetails();

  $("#preview_count").html($("#cart_count").html());
  $("#preview_price").html("£"+$("#price_2").html());

  for (var product in productDetails) {
    if (basket[product] > 0) {
      $(".shopping-cart-items").append($.fn.get_basket_preview_item(product));
    }
  }
}

$.fn.get_basket_preview_item = function(product){
  return(
    '<div class="clearfix">'+
    '  <img src="../img/' + productDetails[product]["image"] + '" alt="Image of '+product+'" />'+
    '  <span class="item-name">'+productDetails[product]["name"]+'</span>'+
    '  <span class="item-detail">'+productDetails[product]["description"]+'</span>'+
    '  <span class="item-price">&pound;' + productDetails[product]["price"] + '</span>'+
    '  <span class="item-quantity">Quantity: '+basket[product]+'</span>'+
    '</div>'
  )
}
