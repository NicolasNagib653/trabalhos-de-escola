var btn = document.getElementById("btn")
var wtd = Math.floor(Math.random() * 100) - 10
var hgt = Math.floor(Math.random() * 100) - 10

function posicao(){
    btn.style.top = wtd+"%" 
    btn.style.left = hgt+"%" 
}
function aparecer(){
    btn.classList.toggle("aparecer")
}

function sumir(){
    btn.classList.toggle("aparecer")
}
