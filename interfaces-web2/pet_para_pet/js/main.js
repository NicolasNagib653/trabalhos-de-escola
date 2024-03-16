
let width  = window.innerWidth
var imagem = document.getElementsByClassName('imagem_carrossel')
if(width < 900){
    imagem[0].setAttribute('src', '../img/Banner 1 - 900-450.png')
    imagem[1].setAttribute('src', '../img/Banner 2 - 900-450.png')
    imagem[2].setAttribute('src', '../img/Banner 3 - 900-450.png')
} else if(width > 1600){
    imagem[0].setAttribute('src', '../img/Banner 1- 2000-450.png')
    imagem[1].setAttribute('src', '../img/Banner 2- 2000-450.png')
    imagem[2].setAttribute('src', '../img/Banner 3- 2000-450.png')
}


const controls = document.querySelectorAll('.control');
let currentItem = 0;
const items = document.querySelectorAll('.item');
const maxItems =  items.length;

controls.forEach(control => {control.addEventListener('click', () => {
    const isLeft = control.classList.contains("arrow-left");
    
    if(isLeft){
        currentItem -= 1;
    }
    else{
        currentItem += 1;
    }
    if(currentItem >= maxItems){
        currentItem = 0;
    }
    if(currentItem < 0){
        currentItem = maxItems -1;
    }

    items.forEach(item => item.classList.remove('current-item'));
    items[currentItem].scrollIntoView({
        inline: "center",
        behavior:"smooth",
        block:"nearest"
    });
    items[currentItem].classList.add('current-item')
    });
});
