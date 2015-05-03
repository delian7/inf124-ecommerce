function validateStarbucksForm() {

  //find the starbucksMenu (table)
  var table = document.getElementById("starbucksMenu");
  //get ALL of the 'select' elements
  var input = table.getElementsByTagName('select');

  //iterate through all form fields
  for (var i = 0; i < input.length; i++) {
    //get the innerText of element at i
    var drink = document.getElementsByClassName("drinkName")[i].innerText;
    var price = parseFloat(document.getElementsByClassName("price")[i].innerText, 10);
    //get the value of the select at i
    var quantity = parseFloat(input[i].value);

    if (quantity != 0)
      alert("You ordered a " + drink + "which costs " + price +". \n\nThe total price is: " + price * quantity);
  };
};
