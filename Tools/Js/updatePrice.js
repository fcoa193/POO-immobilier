const selectValue = document.querySelector('select')
let maxPriceRange = document.querySelector("input[name='prix']")

if(!maxPriceRange){
    maxPriceRange = document.querySelector("input[name='maxprice']")
}
console.log(maxPriceRange);
maxPriceUpdate();

selectValue.onchange = () => {
    maxPriceUpdate();
}

function maxPriceUpdate() {
    if(selectValue.value == 'Location'){
        maxPriceRange.max = 3000;
        maxPriceRange.value = 3000;
        maxPriceRange.nextElementSibling.querySelector('.value').innerHTML = '+' + 3000
        
    } else{
        maxPriceRange.max = 1000000;
        maxPriceRange.value = 1000000;
        maxPriceRange.nextElementSibling.querySelector('.value').innerHTML = '+' + 1000000
    }
}