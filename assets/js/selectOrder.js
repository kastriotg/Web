import {foodOrdered} from './script.js';
let foods = document.getElementsByClassName('specialItem1');
for(let food of foods){
    food.addEventListener('click', (food)=>{
        let foodClicked = food.path[2].childNodes[1].innerText;
        let foodId= food.path[3].childNodes[1].innerText;
        foodOrdered(foodClicked, foodId);
    });
}