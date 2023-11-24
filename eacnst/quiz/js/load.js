function load(){
    history.pushState(null,null, "index.html")
    window.addEventListener('popstate', function () {
    history.pushState(null, null, "index.html")
})}
