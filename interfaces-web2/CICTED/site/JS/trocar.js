let nomlog = document.querySelector("#nomlog")
let senlog = document.querySelector("#senhlog")
let nomcad = document.querySelector("#nomcad")
let sencad = document.querySelector("#senhcad")
let telcad = document.querySelector("#telcad")
let email  = document.querySelector("#email")
let esccad = document.querySelector("#esccad")

function cadastro(){
    let body = document.querySelector("body")
    body.classList.toggle("active")
}

nomlog.addEventListener("keyup", function(input){
    teste(nomlog)   
})
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
})
email.addEventListener("keyup", function(input){
    teste(email)   
})
esccad.addEventListener("keyup", function(input){
    teste(esccad)   
})

function teste(input){
    
if (input.value == false){
    input.classList.remove("teste")
} else{
    input.classList.add("teste")
}}