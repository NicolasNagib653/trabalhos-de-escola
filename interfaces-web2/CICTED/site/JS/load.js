function carregar(){
    for (let i=0;i <=9; i++){
        let loja = document.createElement("div")
        
        loja.innerHTML = `
        <div class="header-loja">
        <div class="logo-loja"><img src="img/Imagem1.png" alt="Logo da loja"></div>
        <div class="nome-loja">
            <h2><a href="paginas/perfildaloja.html"><abbr title="Acessar perfil da loja">Perfil da loja</abbr></a></h2>
            <h5>Nome</h5>
        </div>
        <div class="comentario"></div>
        </div>
        <div class="container-loja">
            <div class="card"><img src="img/lojas/l${i+1}.png"></div>
            <div class="card"><img src="img/lojas/ll${i+1}.png"></div>
        </div>`
        loja.classList.add("loja")
        let main = document.querySelector("main").appendChild(loja)
    }
}

document.addEventListener("DOMContentLoaded", ()=>{
    desativarHamburguer()
    carregar()
})
/* <div class="loja">

</div> */