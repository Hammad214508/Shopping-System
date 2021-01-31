$(document).ready(function(){

    $.fn.activate_nav_bar = function(){
        $(".nav-item.active").removeClass("active");
        $("#nav-products").addClass("active");
    }


    var pageready = (function(){
        var thispage = {};
        thispage.init = function(){
            $.fn.activate_nav_bar();

            updateBasketCount();

            $("#view_basket").on("click", function(){
              window.open("/eveg-js/Basket/","_self")
            })
        };

        return thispage;
    })();

    pageready.init();

});
