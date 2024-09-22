const listaDeEscolas = [
    {abbr: "Etec", name: "Etec Doutor Geraldo José Rodrigues Alckmin"},
    {abbr: "Amácio", name: "EE Amácio Mazzaropi"},
    {abbr: "Amador", name: "EE Amador Bueno da Veiga"},
    {abbr: "Newton", name: "EE Newton Câmara L. Barros"},
]


// console.log(listaDeEscolas[0].abbr)

function mostrar(){
    tam = listaDeEscolas.length
    let escolas = document.getElementById("escolas")

    for (i=0;i<tam;i++){
        option =document.createElement("option")
        option.value = listaDeEscolas[i].name
        option.text = listaDeEscolas[i].abbr
        escolas.appendChild(option)
    }
}