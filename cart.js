var names = [];
var quantity = [];
var individualPrices = [];
var total_amount = 0.0;
var remove = "remove";
function addProductToRow(id) {
  var table = document.getElementById("myTable");
  var name = $(".name")[id].innerHTML;
  var price = $(".price")[id].innerHTML;
  var individualPrice = parseInt(price.split("₱")[1]);
  if (names.includes(name)) {
    var index = names.indexOf(name);
    individualPrices[index] += individualPrices[index] / quantity[index];
    quantity[index] += 1;
    var row = document.getElementById("myTable").rows[index + 1];
    var cell2 = row.deleteCell(1);
    var cell2 = row.insertCell(1);
    cell2.innerHTML +=
      "<input type='number' min='1' max='10' onchange='quantityChanged(this.value, index)' name='points' step='1' value='" +
      quantity[index] +
      "'>";
    ("</input>");
    var cell3 = row.deleteCell(2);
    var cell3 = row.insertCell(2);
    cell3.innerHTML = individualPrices[index];
  } else {
    var row = table.insertRow(-1);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
    names.push(name);
    quantity.push(1);
    individualPrices.push(individualPrice);
    var index = names.indexOf(name);
    cell1.innerHTML = name;
    cell2.innerHTML +=
      "<input type='number' min='1' max='10' onchange='quantityChanged(this.value, index)' name='points' step='1' value='" +
      quantity[index] +
      "'>";
    ("</input>");
    cell3.innerHTML = individualPrices[index];
    cell4.innerHTML +=
      "<button class='btn btn-danger' onClick='removeItem(this)'>" +
      remove +
      "</button>";
  }
  total_amount += individualPrice;
  getTotalProductQuantity();
  $(".total").text("₱" + total_amount);
}
async function getTotalProductQuantity() {
  $(".cart-count").text(names.length);
}
function quantityChanged(val, index) {
  alert("Quantity has changed. The new Quantity is: " + val);
  alert(index);
}
function removeItem(r) {
  var i = r.parentNode.parentNode.rowIndex;
  total_amount -= individualPrices[i - 1];
  $(".total").text("₱" + total_amount);
  document.getElementById("myTable").deleteRow(i);
  individualPrices.splice(i - 1, 1);
  quantity.splice(i - 1, 1);
  names.splice(i - 1, 1);
  getTotalProductQuantity();
}
$("#exampleModal").on("show.bs.modal", function (event) {});
