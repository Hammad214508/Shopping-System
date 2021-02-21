$(document).ready(function(){
    $(window).keydown(function(event){
      if(event.keyCode == 13){
          event.preventDefault();
      }
    });

    $("#full_form").validate();

    $("#full_form").submit(function(e) {
        e.preventDefault();
    });


    $.fn.valid_form = function(){
      if (!$("#full_form").valid()){
        return false;
      }
      var expiry_date = new Date(20+$("#year").val(), $("#month").val()-1, 1, 0, 0, 0, 0);
      if (expiry_date < new Date()){
        $("#expired").show();
        return false;
      }
      return true;
    }



    var pageready = (function(){
        var thispage = {};
        thispage.init = function(){

          $("#cancel").on("click", function(){
            window.open("/eveg-js/Basket/","_self")
          })

          $("#pay_now").on("click", function(){
            if ($.fn.valid_form()){
              setName();
              setAddress();
              setCardDetails();
              window.open("/eveg-js/Invoice/","_self")
            }
          })

          $("#card_1").on("input", function(){
            if ($(this).val().length >= 4){
              $("#card_2").focus();
            }

          })

          $("#card_2").on("input", function(){
            if ($(this).val().length >= 4){
              $("#card_3").focus();
            }

            if ($(this).val() == ""){
              $("#card_1").focus();
            }

          })

          $("#card_3").on("input", function(){
            if ($(this).val().length >= 4){
              $("#card_4").focus();
            }

            if ($(this).val() == ""){
              $("#card_2").focus();
            }
          })

          $("#card_4").on("input", function(){
            if ($(this).val() == ""){
              $("#card_3").focus();
            }

          })

          $(".credit_card_num").on("input", function(){
            var card_num = $("#card_1").val()+ $("#card_2").val()+ $("#card_3").val()+ $("#card_4").val();
            $("#cardnumber").val(card_num);
          })

          $("#cc").on("input", function(){
            $("#cardnumber").val($(this).val());
          })

          $(".only_numbers").on("input", function(){
            var c = this.selectionStart,
                r = /[^0-9]/gi,
                v = $(this).val();
            if(r.test(v)) {
              $(this).val(v.replace(r, ''));
              c--;
            }
            this.setSelectionRange(c, c);
          })


          $("#month").on("input", function(){
            if ($(this).val().length >= 2){
              $("#year").focus();
            }
          })

          $("#cc").mask("9999-9999-9999-9999");


        };
        return thispage;
    })();

    pageready.init();

});
