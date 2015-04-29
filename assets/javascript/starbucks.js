function validateStarbucksForm() {
  var id=1;
  var price = "price";
  while (document.getElementById(id)!=null){
    var starbucks = document.getElementById(id);
    if(starbucks.options[starbucks.selectedIndex].value!=0) {
      var priceid=price.concat(id);
      alert('you have selected: ' + document.getElementById(priceid).textContent);
    };


    id++;
  };
};
