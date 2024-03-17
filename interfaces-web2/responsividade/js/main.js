
let width  = window.innerWidth
// var imagem = document.getElementsByClassName('imagem_carrossel')
// if(width < 900){
//     imagem[0].setAttribute('src', 'img/Banner_1_900-450.png')
//     imagem[1].setAttribute('src', 'img/Banner_2_900-450.png')
//     imagem[2].setAttribute('src', 'img/Banner_3_900-450.png')
// } else if(width > 1600){
//     imagem[0].setAttribute('src', 'img/Banner_1_2000-450.png')
//     imagem[1].setAttribute('src', 'img/Banner_2_2000-450.png')
//     imagem[2].setAttribute('src', 'img/Banner_3_2000-450.png')
// }


// const controls = document.querySelectorAll('.control');
// let currentItem = 0;
// const items = document.querySelectorAll('.item');
// const maxItems =  items.length;

// controls.forEach(control => {control.addEventListener('click', () => {
//     const isLeft = control.classList.contains("arrow-left");
    
//     if(isLeft){
//         currentItem -= 1;
//     }
//     else{
//         currentItem += 1;
//     }
//     if(currentItem >= maxItems){
//         currentItem = 0;
//     }
//     if(currentItem < 0){
//         currentItem = maxItems -1;
//     }

//     items.forEach(item => item.classList.remove('current-item'));
//     items[currentItem].scrollIntoView({
//         inline: "center",
//         behavior:"smooth",
//         block:"nearest"
//     });
//     items[currentItem].classList.add('current-item')
//     });
// });

const hamburguer = document.querySelector(".hamburguer")
const nav        = document.querySelector("#hamburguer")

hamburguer.addEventListener("click", ()=>
nav.classList.toggle("active"))

if(width > 780){
    function unwrap(element) {
        const fragment = document.createDocumentFragment();
        while (element.firstChild) {
            const child = element.removeChild(element.firstChild);
            fragment.appendChild(child);
        }
        element.parentNode.replaceChild(fragment, element);
    }
    
    // Uso:
    unwrap(nav);
}