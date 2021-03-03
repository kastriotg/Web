function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}
  
  // Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
    if (!event.target.matches('.dropBtn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

//
let orderedBtn = document.getElementById('orders');
let dropUpBtn = document.getElementsByClassName('dropUpbtn');
let dropdownContentOrder = document.getElementsByClassName('dropUp-content');
let orders= [];

console.log(orders);
if(orders.length > 0){
  for(let order of orders){
    // dropUpBtn[0].innerText = orders.length;
    orderedBtn.style.display = 'inline';
    var node = document.createElement("LI"); 
    var textnode = document.createTextNode(order.food);
    node.appendChild(textnode);
    // dropdownContentOrder.appendChild(node);
  }
}else{
  orderedBtn.style.display = 'none';
}

class Orders {
  constructor(food, id){
    this.food = food;
    this.id = id;
  }
}


function foodOrdered(food, foodId){
  const order = new Orders(food,foodId);
  orders.push(order);
}

export {foodOrdered};






