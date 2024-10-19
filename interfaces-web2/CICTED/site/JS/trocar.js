let emalog  = document.querySelector("#emalog")
let senlog = document.querySelector("#senhlog")
let nomcad = document.querySelector("#nomcad")
let sencad = document.querySelector("#senhcad")
let telcad = document.querySelector("#telcad")
let emacad  = document.querySelector("#emacad")
let esccad = document.querySelector("#esccad")
let botaoLogin = document.querySelector("#botaoLogin")
let botaoCadastro = document.querySelector("#botaoCadastro")
let body = document.querySelector("body")

function cadastro(){
    body.classList.toggle("active")
}
senlog.addEventListener("keyup", function(input){
    teste(senlog)   
})
nomcad.addEventListener("keyup", function(input){
    teste(nomcad)   
})
sencad.addEventListener("keyup", function(input){
    teste(sencad)   
})
telcad.addEventListener("keyup", function(input){
    teste(telcad)
    if(telcad.value.length == 3){
        if(telcad.value.length == 4 != ")"){
            telcad.value += ") "
        
    }} else if(telcad.value.length == 10){
        if(telcad.value.length == 11 != "-"){
            telcad.value += "-"
        }
    }
})

emacad.addEventListener("keyup", function(input){
    teste(emacad)   
})
emalog.addEventListener("keyup", function(input){
    teste(emalog)   
})
esccad.addEventListener("keyup", function(input){
    teste(esccad)   
})

function teste(input){
if (input.value == false){
    input.classList.remove("teste")
} else{
    input.classList.add("teste")}
}
// Máscaras nos inputs
telcad.addEventListener("keypress", function(){
    if(telcad.value.length == 0){
        if(telcad.value != "("){
        telcad.value= "("+telcad.value
    }}
})

function mostrarSenha(){
    let mosCad = document.getElementById("mosCad")

    if(body.classList == "active"){
        if(sencad.type === "password"){
        mosCad.classList = "bi bi-eye-slash sen"
        sencad.setAttribute("type", "text")
        }else{
            mosCad.classList = "bi bi-eye sen"
            sencad.setAttribute("type", "password")
        }
    }
}