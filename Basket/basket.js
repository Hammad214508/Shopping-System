$(document).ready(function(){

  $.fn.activate_nav_bar = function(){
      $(".nav-item.active").removeClass("active");
      $("#nav-basket").addClass("active");
  }


  var pageready = (function(){
      var thispage = {};
      thispage.init = function(){
        $.fn.activate_nav_bar();

        $("#continue_shopping").on("click", function(){
          window.open("/eveg-js/Shop/","_self")
        })

        $("#clear_basket").on("click", function(){
          createEmptyBasket();
          window.open("/eveg-js/Shop/","_self")
        })

        $("#order").on("click", function(){
          window.open("/eveg-js/Order/","_self")
        })

      };

      return thispage;
  })();

  pageready.init();

});
