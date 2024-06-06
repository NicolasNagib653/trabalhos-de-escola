var botao      = document.querySelector(".material-symbols-outlined")
var html       = document.querySelector("html")
function trocarTema(){
    if(botao.innerHTML == "dark_mode"){
        html.style.setProperty("--cor01", "white")
        html.style.setProperty("--cor02", "black")
        html.style.animation =" white 2s"
        botao.innerHTML = "brightness_5"
    } else if(botao.innerHTML == "brightness_5"){
        html.style.setProperty("--cor01", "black")
        html.style.setProperty("--cor02", "white")
        html.style.animation =" dark 2s"
        botao.innerHTML = "dark_mode"
    }
}