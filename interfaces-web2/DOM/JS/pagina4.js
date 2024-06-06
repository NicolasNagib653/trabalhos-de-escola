function verificar(){
    let inpt = document.querySelector("input")
    let res  = document.querySelector(".res")
    
    if(inpt.value == "tiaguimb"){
        alert("Parábens, você acertou!!")
        location.href = "../paginas/pagina5.html"
    } else{
        alert("Você errou , tente novamente")
    }
}