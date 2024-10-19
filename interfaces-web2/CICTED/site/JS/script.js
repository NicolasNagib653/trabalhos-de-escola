let pesquisa = document.getElementById("barraPesquisa")

function hamburguer() {
    let hamburguer = document.getElementById("hamburguer")
    let divLink = document.getElementById("links")

    hamburguer.classList.toggle("hamburguerActive")
    divLink.classList.toggle("linksActive")
}

function desativarHamburguer() {
    let hamburguer = document.getElementById("hamburguer")
    let divLink = document.getElementById("links")
    let nav = document.querySelector("nav")
    let links = Array.from(nav.querySelectorAll('a'));
    let campo = document.querySelector(".campo")


    if (window.innerWidth >= 780) {
        hamburguer.style.display = "none"
        while (divLink.firstChild) {
            nav.appendChild(divLink.firstChild)
        }
        pesquisa.style.display = "none"
    } else {
        hamburguer.style.display = "block"
        links.forEach(function (link) {
            divLink.appendChild(link);
        })
        divLink.appendChild(campo)
        pesquisa.style.display ="block"
    }
}
var body = document.querySelector("body")

function barraPesquisa() {
    pesquisa.classList.toggle("active")
    if(window.innerWidth >= 780){
    if(pesquisa.className !=="active"){
        setTimeout(() =>{
            pesquisa.style.display = "none"
            pesquisa.style.width = "auto"
        },900)
    }else{
        if(window.innerWidth >= 1280){
        pesquisa.style.width = "350px"
        pesquisa.style.display ="block"
    }else if(window.innerWidth < 1280){
        pesquisa.style.width = "250px"
        pesquisa.style.display ="block"
    }
}}
}

window.addEventListener("resize", function () {
    desativarHamburguer()
})

