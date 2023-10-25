
window.addEventListener("scroll", function(){
    let header = document.querySelector('#header')
    header.classList.toggle('rolagem', window.scrollY > 0)
})
window.addEventListener("scroll", function(){
    let header = document.querySelector('#nav-list')
    header.classList.toggle('rolagem', window.scrollY > 0)
})

