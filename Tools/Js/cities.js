const cpInput = document.querySelector("input[name='cp']")
const villeInput = document.querySelector("input[name='ville']")

cpInput.oninput = () => {
    fetch(`https://geo.api.gouv.fr/communes?codePostal=${cpInput.value}`, {
    headers:{
        "Content-type" : "application/json",
        "Accept": "application/json, text-plain, */*",
        "X-Requested-With" : "XMLHttpRequest"
    },
    method : "get"
    }).then((response) => response.json()).then((data)=> {
        if(data.length == 0){
            document.querySelector('.cp-introuvable').innerHTML = "Aucune ville ne correspond à ce code postale"
            villeInput.value = ''
        } else {
            document.querySelector('.cp-introuvable').innerHTML = ""
            villeInput.value = data[0].nom
        }
    })
}

//-----------------------------------------------
// -----------SEARCH INPUT SUGGESTION------------
//-----------------------------------------------



