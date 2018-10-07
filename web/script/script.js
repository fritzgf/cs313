function addToCart(item, price) {
    var httpRequest = new XMLHttpRequest();
    httpRequest.open("GET", "cart.php?action=add&item=" + item + "&price=" + price, true);
    httpRequest.send();
}

function removeFromCart(index, price) {
    document.getElementById(index).style.display = "none";
    
    var total = document.getElementById("orderTotal").innerText;
    total -= price;
    document.getElementById("orderTotal").innerHTML = total;
    
    var httpRequest = new XMLHttpRequest();
    httpRequest.open("GET", "cart.php?action=remove&item=" + index, true);
    httpRequest.send();
}

function itemDetails(index) {
    document.getElementById("item-details").innerHTML = itemDescrips[index];
}

function removeDetails() {
    document.getElementById("item-details").innerHTML = "";
}