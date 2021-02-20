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

          $("#year").on("input", function(){
            if ($(this).val().length >= 2){
              $("#cvv").focus();
            }
          })



        };
        return thispage;
    })();

    pageready.init();

});
