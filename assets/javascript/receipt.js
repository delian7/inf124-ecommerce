//global variable allOrders to keep track of allOrders
allOrders = [];

//this function really does nothing right now since we need PHP to store the variables in our current session
function addToAllOrders(orders) {
  //as orders (from other pages come in), append them to the master order

  allOrders.push(orders);

  //helpful to console.log(allOrders) to understand what's going on
  //console.log(allOrders);

  drawReceipt();
}

function drawReceipt() {

  //will be used for the SUBTOTAL
  var totalPrice = 0;

  //find the receiptTable
  var receiptTable = document.getElementById("receiptTable");

  //insert Table Headers
  var row = receiptTable.insertRow(0);
  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);

  cell1.innerHTML = "<strong>Item(s) Ordered</strong>";
  cell2.innerHTML = "<strong>Price(x qty)</strong>";

  //go through all of the (array) of orders
  for (var i = 0; i < allOrders[0].length; i++) {
    var drink = allOrders[0][i].drink;
    var price = allOrders[0][i].price * allOrders[0][i].quantity;
    totalPrice += price;

    //make a new row at the 2nd position (after the table headers (<th>))
    var row = receiptTable.insertRow(1);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);

    cell1.innerHTML = drink;
    cell2.innerText = "$" + price.toFixed(2);

  };

  //insert subtotal row at last position for SUBTOTAL
  var row = receiptTable.insertRow(allOrders[0].length + 1);
  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);

  cell1.innerHTML = "<strong>SUBTOTAL: </strong>";
  cell2.innerHTML = "$" + totalPrice.toFixed(2);
}
