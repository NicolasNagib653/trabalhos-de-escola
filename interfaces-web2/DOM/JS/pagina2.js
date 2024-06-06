var btn = document.getElementById("btn")

window.addEventListener('resize', function(){
    var largura = window.innerWidth;

    if (largura <= 780){
        btn.classList = 'aparecer'
    }
    else{
        btn.classList.remove('aparecer')
    }

})