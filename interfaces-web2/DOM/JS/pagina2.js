var btn = document.getElementById("btn")
var p   = document.getElementById("paragrafo")
var largura = window.innerWidth;

if (largura <= 780){
    btn.classList = 'aparecer'
    p.innerHTML = "Agora que você reduziu a tela aperte o botão para ir para a próxima página ༼ つ ◕_◕ ༽つ"
}
else{
    btn.classList.remove('aparecer')
    p.innerHTML = "Esse botão não pode ser encontrado numa tela grande. Experimente reduzir pra uma tela menor. "
}

window.addEventListener('resize', function(){
    largura = window.innerWidth
    if (largura <= 780){
        btn.classList = 'aparecer'
        p.innerHTML = "Agora que você reduziu a tela aperte o botão para ir para a próxima página ༼ つ ◕_◕ ༽つ"
    }
    else{
        btn.classList.remove('aparecer')
        p.innerHTML = "Esse botão não pode ser encontrado numa tela grande. Experimente reduzir pra uma tela menor. "
    }
})
