$(document).ready(function(){

    var pageready = (function(){
        var thispage = {};
        thispage.init = function(){

          updateBasketCount();

          $("#cancel").on("click", function(){
            window.open("/eveg-js/Shop/","_self")
          })

          $("#proceed").on("click", function(){
            setName();
            setAddress();
            setCardDetails();
            window.open("/eveg-js/Invoice/","_self")
          })


        };
        return thispage;
    })();

    pageready.init();

});
