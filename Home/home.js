$(document).ready(function(){

    $.fn.activate_nav_bar = function(){
        $(".nav-item.active").removeClass("active");
        $("#nav-home").addClass("active");
    }


    var pageready = (function(){
        var thispage = {};
        thispage.init = function(){
            $.fn.activate_nav_bar();

            $("#clck_to_cont").on("click", function(){
              window.open("/eveg-js/Shop/","_self")
            })

        };
        return thispage;
    })();

    pageready.init();

});
