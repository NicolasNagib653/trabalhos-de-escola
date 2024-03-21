var botaoSignin = document.querySelector('#signin')
var botaoSignUp = document.querySelector('#signup')
var body        = document.querySelector('body')
var title       = document.querySelector('title')

botaoSignin.addEventListener("click", function(){
    body.className = "sign-in-js"
    title.innerHTML = "Login"
})

botaoSignUp.addEventListener("click", function(){
    body.className = "sign-up-js"
    title.innerHTML = "Cadastro"
})