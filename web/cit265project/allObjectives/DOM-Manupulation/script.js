function slideOpen(el) {
    var element = document.getElementById(el);
    element.style.transition = "height 0.2s linear 0s";
    element.style.height = "200px";
}
function slideClose(el) {
    var element = document.getElementById(el);
    element.style.transition = "height 0.2s linear 0s";
    element.style.height = "0px";
}