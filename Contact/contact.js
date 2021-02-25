$(document).ready(function(){

    $.fn.activate_nav_bar = function(){
        $(".nav-item.active").removeClass("active");
        $("#nav-contact").addClass("active");
    }

    $("#contact_form").validate();

    $("#contact_form").submit(function(e) {
        e.preventDefault();
        if ($(this).valid()){
          $("#name").val("");
          $("#email").val("");
          $("#subject").val("");
          $("#message").val("");
          $("#form_success").show();
          window.scrollTo(0, 0);
        }

    });


    var pageready = (function(){
        var thispage = {};
        thispage.init = function(){
            $.fn.activate_nav_bar();

        };
        return thispage;
    })();

    pageready.init();

});
