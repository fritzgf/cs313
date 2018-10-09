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

/*onload function*/
$(function () {
    console.log("I work");

    document.getElementById("product-content").style.display = "none";

    document.getElementById("home-content").style.display = "block";


    $.ajax({
        url: "product.json",
        dataType: "json",
        success: function (data) {
            console.log(data);
            var l_one = data.links.link_one;
            var l_two = data.links.link_two;
            var l_three = data.links.link_three;
            var l_four = data.links.link_four;
            var l_five = data.links.link_five;

            console.log("links" + l_one);
            console.log("links" + l_two);
            console.log("links" + l_three);
            console.log("links" + l_four);


            $("#anvils").text(l_one);
            $("#explosive").text(l_two);
            $("#decoys").text(l_three);
            $("#traps").text(l_four);
            $("#browse").text(l_five);

        }

    });

});
// Insert links in the nav
function getData(linkName) {
    // Get the data from the local from acme folder
    if (linkName === "Home") {
        document.getElementById("product-content").style.display = "none";

        document.getElementById("home-content").style.display = "block";

        $("title").html(linkName + ' | ACME');

    } else {

        document.getElementById("home-content").style.display = "none";

        document.getElementById("product-content").style.display = "block";


        $.ajax({
            url: "product.json",
            dataType: "json",
            success: function (data) {
                console.log(data);
                var name = data[linkName].name;
                var description = data[linkName].description;
                var manufacturer = data[linkName].manufacturer;
                var price = data[linkName].price;
                var reviews = data[linkName].reviews;
                var path = data[linkName].path;
                var addToCart = data[linkName].addToCart;
                console.log(" data" + linkName);
                $("title").html(linkName + ' | ACME');
                $("#displayName").text(name);
                $("#displayImage").html("<img src=' " + path + " 'alt='anvil'>");
                $("#displayDescription").html(description);
                $("#displayManufacturer").html("<b>Made by:</b> " + manufacturer);
                $("#displayReviews").html("<b>Reviews:</b> " + reviews + " /5 starts");
                $("#displayPrice").html("Price: $ " + price);
                
                
            }


        });
    }
}

// Intercept the menu link clicks
$("#page-nav").on("click", "a", function (evt) {
    evt.preventDefault();
    console.log('click occured');
    //get the value 
    var linkName = $(this).text();
    console.log(linkName);
    getData(linkName);


});