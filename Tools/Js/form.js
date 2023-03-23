
/* Afficher la valeur du de l'input range */
let inputRange = document.querySelectorAll('input[type="range"]');
console.log(inputRange)
inputRange.forEach(el => {
    const roomsNbr = el.parentNode.nextElementSibling.children[1]
    let myvalue = el.value;
    el.nextElementSibling.querySelector('.value').innerText = myvalue;
    if(el.value == el.max && el.name != "rooms"){
        el.nextElementSibling.querySelector('.value').innerText = '+' + el.value;
    };
    if(el.value == 7 && el.name == "rooms"){
        
         el.nextElementSibling.querySelector('.value').innerText = '+' + 7;
     };
    el.oninput = () => {
        if(el.name === "parts"){
            if(roomsNbr.value > el.value ){
                roomsNbr.nextElementSibling.querySelector('.value').innerText = el.value;
                roomsNbr.value = el.value;
            }
            roomsNbr.max = el.value;

        }
        console.log(el.name + ' ' + el.value);

    el.nextElementSibling.querySelector('.value').innerText = el.value;
    if(el.value == el.max && el.name != "rooms"){
        el.nextElementSibling.querySelector('.value').innerText = '+' + el.value;
    }
    
    if(el.value == 7 && el.name == "rooms"){

         el.nextElementSibling.querySelector('.value').innerText = '+' + 7;
     }
  
  
}
    if(el.name === "parts"){
        roomsNbr.max = el.value;
    }
});



/* Changer l'échelle des input range des prix en fonction du code */
const selectValue = document.querySelector('select')
const maxPriceRange = document.querySelector("input[name='maxprice']")

selectValue.onchange = () => {
    console.log(selectValue.value)
    updateMax();
    updateValues();
}
    updateMax();

function updateMax() {
    if(selectValue.value === 'Louer'){
        maxPriceRange.max = 3000;
    } else{
        maxPriceRange.max = 1000000;
    }
}

function updateValues(){
    if(selectValue.value === 'Louer'){
        maxPriceRange.nextElementSibling.querySelector('.value').innerHTML = 0
        maxPriceRange.value = 0;
    } else{
        maxPriceRange.nextElementSibling.querySelector('.value').innerHTML = 0
        maxPriceRange.value = 0;
    }
} 