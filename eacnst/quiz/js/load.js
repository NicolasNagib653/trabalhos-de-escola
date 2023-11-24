function load(){
    history.pushState(null,null, "index.html")
    window.addEventListener('popstate', function () {
    window.location.replace("index.html")
})}
