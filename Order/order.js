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

    $.fn.name_cookie = function(){
      $(".name_cookie").on("change", function(){
        if ($("#firstname").val() && $("#surname").val()){
          clientName = getName();
          console.log(clientName)
            setName();
            clientName = getName();
            console.log(clientName)
        }
      })
    }

    $.fn.address_cookie = function(){
      $(".address_cookie").on("change", function(){
        if ($("#number").val() && $("#street").val() && $("#postcode").val() && $("#city").val() && $("#country").val()){
            setAddress();
        }
      })
    }

    $.fn.card_details_cookie = function(){
      $(".card_details_cookie").on("change", function(){
        if ($("#cardnumber").val() && $("#month").val() && $("#year").val() && $("#cvv").val() && $("#card_name").val()){
            card_details_cookie();
        }
      })
    }

    $.fn.render_from_cookies = function(){
      $("#firstname").val(getCookieVariableValue("firstname"));
      $("#surname").val(getCookieVariableValue("surname"));
      $("#number").val(getCookieVariableValue("number"));
      $("#street").val(getCookieVariableValue("street"));
      $("#postcode").val(getCookieVariableValue("postcode"));
      $("#city").val(getCookieVariableValue("city"));
      $("#country").val(getCookieVariableValue("country"));
    };



    var pageready = (function(){
        var thispage = {};
        thispage.init = function(){
          $.fn.render_from_cookies();

          $("#cancel").on("click", function(){
            window.open("/eveg-js/Basket/","_self")
          })

          $.fn.name_cookie();
          $.fn.address_cookie();
          $.fn.card_details_cookie();

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
            $("#cardnumber").val(card_num).trigger("change");
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

          $("#year").on("input", function(){
            if ($(this).val().length >= 2){
              $("#cvv").focus();
            }
          })

          $("#cc").mask("9999-9999-9999-9999");

        };
        return thispage;
    })();

    pageready.init();

});
