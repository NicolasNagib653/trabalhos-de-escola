function hamburguer(){
    let hamburguer = document.getElementById("hamburguer")
    let divLink    = document.getElementById("links")

    hamburguer.classList.toggle("hamburguerActive")
    divLink.classList.toggle("linksActive")
}

function desativarHamburguer(){
    let hamburguer = document.getElementById("hamburguer")
    let divLink       = document.getElementById("links")
    let nav        = document.querySelector("nav")
    let links      = Array.from(nav.querySelectorAll('a'));


    if(window.innerWidth >= 780){
        hamburguer.style.display = "none"
        while(divLink.firstChild){
        nav.appendChild(divLink.firstChild)
    }
    } else{
        hamburguer.style.display = "block"
        links.forEach(function(link) {
            divLink.appendChild(link);
        })
    }
}
var body = document.querySelector("body")

window.addEventListener("resize", function(){
    desativarHamburguer()
})