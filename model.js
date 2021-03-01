var food_items = ["carrots", "bananas", "coconut", "apples",
                  "cherries", "tomatoes", "potatoes", "beans"];

function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {

      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
              b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });

  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        // e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x){
            x[currentFocus].click();
            if (inp.id == search){
              document.getElementById("search_btn").click();
            }
          };
        }
      }
  });

  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }

  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }

  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
      x[i].parentNode.removeChild(x[i]);
    }
  }
}

/*execute a function when someone clicks in the document:*/
document.addEventListener("click", function (e) {
    closeAllLists(e.target);
});



}

function getProductDetails() {
  productDetails = {};
  productDetails["carrots"] = {};
  productDetails["carrots"]["image"] = "carrots.jpg";
  productDetails["carrots"]["name"] = "Carrots";
  productDetails["carrots"]["description"] = "Fresh and delicious they are ideal for a variety of soups and stews.";
  productDetails["carrots"]["units"] = "1kg";
  productDetails["carrots"]["price"] = 0.99;
  productDetails["carrots"]["category"] = "vegetable";

  productDetails["bananas"] = {};
  productDetails["bananas"]["image"] = "banana.jpg";
  productDetails["bananas"]["name"] = "Bananas";
  productDetails["bananas"]["description"] = "Our organic bananas are great as an energy boosting snack.";
  productDetails["bananas"]["units"] = "0.5kg";
  productDetails["bananas"]["price"] = 1.29;
  productDetails["bananas"]["category"] = "fruit";

  productDetails["coconut"] = {};
  productDetails["coconut"]["image"] = "coconut.jpg";
  productDetails["coconut"]["name"] = "Coconut";
  productDetails["coconut"]["description"] = "Our Fresh coconuts which have countless uses and taste unbelievable!";
  productDetails["coconut"]["units"] = "1";
  productDetails["coconut"]["price"] = 2.99;
  productDetails["coconut"]["category"] = "fruit";

  productDetails["apples"] = {};
  productDetails["apples"]["image"] = "apple.jpg";
  productDetails["apples"]["name"] = "Apples";
  productDetails["apples"]["description"] = "Crisp, sweet and tart organic red apples only at eVeg.";
  productDetails["apples"]["units"] = "1kg";
  productDetails["apples"]["price"] = 1.49;
  productDetails["apples"]["category"] = "vegetable";

  productDetails["cherries"] = {};
  productDetails["cherries"]["image"] = "cherries.jpg";
  productDetails["cherries"]["name"] = "Cherries";
  productDetails["cherries"]["description"] = "Red glace cherries, slightly darker and have an incredibly flavour.";
  productDetails["cherries"]["units"] = "0.5kg";
  productDetails["cherries"]["price"] = 1.99;
  productDetails["cherries"]["category"] = "fruit";

  productDetails["tomatoes"] = {};
  productDetails["tomatoes"]["image"] = "tomato.jpg";
  productDetails["tomatoes"]["name"] = "Tomatoes";
  productDetails["tomatoes"]["description"] = "Fine, fruity flavour and firm, juicy flesh, ideal for all uses.";
  productDetails["tomatoes"]["units"] = "0.5kg";
  productDetails["tomatoes"]["price"] = 1.99;
  productDetails["tomatoes"]["category"] = "fruit";

  productDetails["potatoes"] = {};
  productDetails["potatoes"]["image"] = "potatoes.jpg";
  productDetails["potatoes"]["name"] = "Potatoes";
  productDetails["potatoes"]["description"] = "Potatoes with an attractive yellow flesh, smooth skin and shallow eyes.";
  productDetails["potatoes"]["units"] = "1kg";
  productDetails["potatoes"]["price"] = 0.99;
  productDetails["potatoes"]["category"] = "vegetable";

  productDetails["beans"] = {};
  productDetails["beans"]["image"] = "beans.jpg";
  productDetails["beans"]["name"] = "Beans";
  productDetails["beans"]["description"] = "Sweet and tender fine green beans speacially selected for eVeg.";
  productDetails["beans"]["units"] = "1kg";
  productDetails["beans"]["price"] = 1.29;
  productDetails["beans"]["category"] = "vegetable";

  return productDetails;
}

function getProductList() {
  var products = [];
  var productDetails = getProductDetails();

  for (var key in productDetails) {
    products.push(key);
  }

  return products;
}

function getProductQuantity(product) {
  var value = "; " + document.cookie;
  var parts = value.split("; " + product + "=");
  if (parts.length == 2) return parts.pop().split(";").shift();
}

function readBasket() {
  var basket = {};
  products = getProductList();
  var productcount = products.length;
  for (var i = 0; i < productcount; i++) {
    basket[products[i]] = getProductQuantity(products[i]);
  }

  return basket;
}

function calculateTotals() {
  var basket = readBasket();
  var productDetails = getProductDetails();

  total = 0;
  for (var product in basket) {
    total += parseInt(basket[product]) * parseFloat(productDetails[product]["price"]);
  }

  totals = {};
  totals["total"] = total.toString();
  totals["vat"] = (total - total / 1.175).toString();
  totals["totalnovat"] = (total / 1.175).toString();

  return totals;
}

function updateBasketCount(){
  var num_items = 0;
  basket = readBasket();
  for (var product in basket) {
    if (basket[product] != "0" && basket[product] != "NaN" && basket[product] != undefined){
      num_items += 1;
    }
  }

  var span = document.getElementById("cart_count");
  span.textContent = num_items;
}

function isNumeric(str) {
  if (typeof str != "string") return false // we only process strings!
  return !isNaN(str) && // use type coercion to parse the _entirety_ of the string (`parseFloat` alone does not do this)...
         !isNaN(parseInt(str)) // ...and ensure strings of whitespace fail
}

function addToBasket(product, quantity) {

  if (document.cookie.indexOf(product) == -1) {
    createEmptyBasket();
  }

  if (isNumeric(quantity)){
    if (parseInt(quantity) > 0){
      oldquantity = parseInt(getProductQuantity(product));
      newquantity = oldquantity + parseInt(quantity);
      document.cookie = product + "=" + newquantity.toString() + ";path=/";
      updateBasketCount();
    }
  }
}

function removeProductFromBasket(product) {
  document.cookie = product + "=0;path=/";
}

function changeProductQuantity(product, newquantity) {
  document.cookie = product + "=" + newquantity.toString() + ";path=/";
}

function setupBasket() {
  products = getProductList();
  var productcount = products.length;
  if (!document.cookie){
    for (var i = 0; i < productcount; i++) {
      document.cookie=products[i] + "=0;path=/";
    }
  }
}

function createEmptyBasket() {
  products = getProductList();
  var productcount = products.length;
  for (var i = 0; i < productcount; i++) {
    document.cookie=products[i] + "=0;path=/";
  }
}

function emptyName(){
  document.cookie="title=;path=/";
  document.cookie="firstname=;path=/";
  document.cookie="surname=;path=/";
}

function emptyAddress(){
  document.cookie="title=;path=/";
  document.cookie="firstname=;path=/";
  document.cookie="surname=;path=/";
  document.cookie="number=;path=/";
  document.cookie="street=;path=/";
  document.cookie="postcode=;path=/";
  document.cookie="city=;path=/";
  document.cookie="country=;path=/";
}

function createEmptyOrder() {
  document.cookie="title=;path=/";
  document.cookie="firstname=;path=/";
  document.cookie="surname=;path=/";
  document.cookie="number=;path=/";
  document.cookie="street=;path=/";
  document.cookie="postcode=;path=/";
  document.cookie="city=;path=/";
  document.cookie="country=;path=/";
  document.cookie="cardtype=;path=/";
  document.cookie="cardnumber=;path=/";
  document.cookie="month=;path=/";
  document.cookie="year=;path=/";
}

function setName() {
  document.cookie="title=" + document.getElementById('title').value + ";path=/";
  document.cookie="firstname=" + document.getElementById('firstname').value + ";path=/";
  document.cookie="surname=" + document.getElementById('surname').value + ";path=/";
}

function getName() {
  var name = {};
  name["title"] = getCookieVariableValue('title');
  name["firstname"] = getCookieVariableValue('firstname');
  name["surname"] = getCookieVariableValue('surname');

  return name;
}

function setAddress() {
  document.cookie="number=" + document.getElementById('number').value + ";path=/";
  document.cookie="street=" + document.getElementById('street').value + ";path=/";
  document.cookie="postcode=" + document.getElementById('postcode').value + ";path=/";
  document.cookie="city=" + document.getElementById('city').value + ";path=/";
  document.cookie="country=" + document.getElementById('country').value + ";path=/";
}

function getAddress() {
  var address = {};
  address["number"] = getCookieVariableValue('number');
  address["street"] = getCookieVariableValue('street');
  address["postcode"] = getCookieVariableValue('postcode');
  address["city"] = getCookieVariableValue('city');
  address["country"] = getCookieVariableValue('country');

  return address;
}

function setCardDetails() {
  if (document.getElementById('solo').selected) {
    document.cookie="cardtype=Solo;path=/";
  }
  else if (document.getElementById('switch').selected) {
    document.cookie="cardtype=Switch;path=/";
  }
  else if (document.getElementById('mastercard').selected) {
    document.cookie="cardtype=Mastercard;path=/";
  }
  else if (document.getElementById('visa').selected) {
    document.cookie="cardtype=Visa;path=/";
  }
  document.cookie="cardnumber=" + document.getElementById('cardnumber').value + ";path=/";
  document.cookie="month=" + document.getElementById('month').value + ";path=/";
  document.cookie="year=" + document.getElementById('year').value + ";path=/";
}

function getCardDetails() {
  var cardDetails = {};
  cardDetails["cardtype"] = getCookieVariableValue('cardtype');
  cardDetails["cardnumber"] = getCookieVariableValue('cardnumber');
  cardDetails["month"] = getCookieVariableValue('month');
  cardDetails["year"] = getCookieVariableValue('year');

  return cardDetails;
}

function getCookieVariableValue(variable) {
  var value = "; " + document.cookie;
  var parts = value.split("; " + variable + "=");
  if (parts.length == 2) return parts.pop().split(";").shift()
}
