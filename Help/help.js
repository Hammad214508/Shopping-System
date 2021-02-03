$(document).ready(function(){

    $.fn.activate_nav_bar = function(){
        $(".nav-item.active").removeClass("active");
        $("#nav-help").addClass("active");
    }


    var pageready = (function(){
        var thispage = {};
        thispage.init = function(){
            $.fn.activate_nav_bar();

        };
        return thispage;
    })();

    pageready.init();

});
