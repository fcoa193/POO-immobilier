// let root = document.documentElement;
// root.style.setProperty('--primary', 'lightgreen');

if (window.innerWidth >= 768){
    document.querySelector('.box input[type="submit"]').value = "Rechercher";
} else {
    document.querySelector('.box input[type="submit"]').value = "🔎";
}

window.onresize = () => {
    if (window.innerWidth >= 768){
        document.querySelector('.box input[type="submit"]').value = "Rechercher";
    } else {
        document.querySelector('.box input[type="submit"]').value = "🔎";
    }
}

// Afficher et faire disparaître la modal

document.querySelector('#open-filter').onclick = (e) => {
    e.preventDefault();
    document.querySelector('.backdrop-modal').style.display = "inline";
}

document.querySelector('#close-filter').onclick = (e) => {
    e.preventDefault();
    document.querySelector('.backdrop-modal').style.display = "none";
}
