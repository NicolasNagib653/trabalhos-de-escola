function verificar(){
    let inpt = document.querySelector("input")
    
    if(inpt.value == "tiaguimb"){
        alert("Parábens, você acertou!!")
        location.href = "../paginas/pagina5.html"
    } else{
        alert("Você errou , tente novamente")
    }
}