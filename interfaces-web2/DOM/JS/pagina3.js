let btn = document.querySelectorAll("button")
let cont = document.querySelector("#container")
let rand = Math.floor(Math.random() * 29)

btn[rand].addEventListener('mouseenter', function(){
    cont.classList = "certo"
})

btn[rand].addEventListener('mouseleave', function(){
    cont.classList.toggle ("certo")
})

cont.addEventListener('mouseenter', function(){
    cont.classList.add("errado")
})

cont.addEventListener('mouseleave', function(){
    cont.classList.toggle("errado")
})

btn[rand].addEventListener('click', function(){
    location.href ="../paginas/pagina4.html"
})