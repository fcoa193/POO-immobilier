
/* Afficher la valeur du de l'input range */
let inputRange = document.querySelectorAll('input[type="range"]');
inputRange.forEach(el => {
    const roomsNbr = el.parentNode.nextElementSibling.children[1]
    let myvalue = el.value;
    el.nextElementSibling.querySelector('.value').innerText = myvalue;
    if(el.value == el.max && el.name != "chambres"){
        el.nextElementSibling.querySelector('.value').innerText = '+' + el.value;
    };
    if(el.value == 7 && el.name == "chambres"){
         el.nextElementSibling.querySelector('.value').innerText = '+' + 7;
     };
    el.oninput = () => {
        if(el.name === "pieces"){
            if(roomsNbr.value > el.value ){
                roomsNbr.nextElementSibling.querySelector('.value').innerText = el.value;
                roomsNbr.value = el.value;
            }
            roomsNbr.max = el.value;
        }

    el.nextElementSibling.querySelector('.value').innerText = el.value;
    if(el.value == el.max && el.name != "chambres"){
        el.nextElementSibling.querySelector('.value').innerText = '+' + el.value;
    }
    
    if(el.value == 7 && el.name == "chambres"){
         el.nextElementSibling.querySelector('.value').innerText = '+' + 7;
    }
}
    if(el.name === "pieces"){
        roomsNbr.max = el.value;
    }
});

// /* Changer l'échelle des input range des prix en fonction du code */



