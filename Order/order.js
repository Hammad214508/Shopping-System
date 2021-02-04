$(document).ready(function(){

    var pageready = (function(){
        var thispage = {};
        thispage.init = function(){

          $("#cancel").on("click", function(){
            window.open("/eveg-js/Basket/","_self")
          })

          $("#pay_now").on("click", function(){
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
