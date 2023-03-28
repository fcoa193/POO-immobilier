const searchInput = document.querySelector("form input[name='city']");
const suggestionContainer = document.querySelector("#suggestion");
suggestionContainer.style.display = "none"
searchInput.oninput = () => {
    fetch(`https://geo.api.gouv.fr/communes?nom=${searchInput.value}&boost=population&limit=5`, {
    headers:{
        "Content-type" : "application/json",
        "Accept": "application/json, text-plain, */*",
        "X-Requested-With" : "XMLHttpRequest"
    },
    method : "get"
    }).then((response) => response.json()).then((data)=> {
        if(data.length > 0){
            suggestionContainer.style.display = "flex"
            suggestionContainer.innerHTML = "";
            data.forEach(city => {
                suggestionContainer.innerHTML += `<span class='suggestion' onclick=replace(this)>${city.nom}</span>`
            });

            let i = 0;
            let selected = 0;
            document.onkeyup = (e) => {
                if (e.keyCode === 38) {
                    console.log('up');
                    if(i === 1){
                        selected = document.querySelector(`.suggestion:nth-child(${i})`);
                        selected.style.cssText = "background: white; color: black;";
                        i=5
                        selected = document.querySelector(`.suggestion:nth-child(${i})`);
                        selected.style.cssText = "background: var(--border); color: var(--primary);";
                        searchInput.value = selected.innerHTML

                    } else{
                        selected = document.querySelector(`.suggestion:nth-child(${i})`);
                        selected.style.cssText = "background: white;color: black;"
                        i-=1
                        selected = document.querySelector(`.suggestion:nth-child(${i})`);
                        selected.style.cssText = "background: var(--border);color: var(--primary);"
                        searchInput.value = selected.innerHTML
                    }
                 }
                
                if (e.keyCode === 40){
                    console.log('down' + i);
                    if(i === 0){
                        i+=1
                        selected = document.querySelector(`.suggestion:nth-child(${i})`);
                        selected.style.cssText = "background: var(--border); color: var(--primary);";
                        searchInput.value = selected.innerHTML
                    }else if(i === 5){
                        selected = document.querySelector(`.suggestion:nth-child(${i})`);
                        selected.style.cssText = "background: white; color: black;";
                        i=1;
                        selected = document.querySelector(`.suggestion:nth-child(${i})`);
                        selected.style.cssText = "background: var(--border); color: var(--primary);";
                        searchInput.value = selected.innerHTML

                    }else{
                        selected = document.querySelector(`.suggestion:nth-child(${i})`);
                        selected.style.cssText = "background: white; color: black;";
                        i+=1
                        selected = document.querySelector(`.suggestion:nth-child(${i})`);
                        selected.style.cssText = "background: var(--border); color: var(--primary);";
                        searchInput.value = selected.innerHTML
                    }                    
                } 
                if (e.keyCode === 13){                    
                    searchInput.value = selected.innerHTML
                    suggestionContainer.style.display = "none"
                }  
            }
        } else {
            suggestionContainer.style.display = "none"
        }
      
    })
}

function replace(suggestion) {
    searchInput.value = suggestion.innerHTML
    suggestionContainer.style.display = "none"
}

