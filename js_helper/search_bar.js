$(document).ready(function(){

  var pageready = (function(){
      var thispage = {};
      thispage.init = function(){
        $("#search_btn").on("click", function(){
          window.open("/eveg-js/Shop/?search="+$("#search").val(),"_self")
        })

        $("#search").on("keyup", function(e){
          if (e.key === 'Enter' || e.keyCode === 13) {
            window.open("/eveg-js/Shop/?search="+$("#search").val(),"_self")
          }
        })
      };

      return thispage;
  })();

  pageready.init();

});
