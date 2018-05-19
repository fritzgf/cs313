<?php
session_start();
if(!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
    $_SESSION['price'] = array();
}
?>
<!DOCTYPE html>
<html lang="eng">

<head meta charset="UTF-8">
    <meta name ="viewport" comment="width=device-width">
    <title>browse Items</title>
</head>
    <body>
        <div class="container">
            <header>
                <h1>Welcome to the Marcket's shop</h1>
                <a href="view-cart.php">View Cart</a>
            </header>
    
            <nav></nav>
    
            <main>
             
    
                <section>`
                    <h2>Inventory</h2>
                    
                    <div id="item-details">
                        
                    </div>
                    
                    <table>
                        <tr>
                            <td><button onclick="addToCart('anvil-tn', 50)">Add to Cart</button></td>
                            <td onmouseenter="itemDetails(0)" onmouseout="removeDetails()">anvil</td>
                            <td>50 Gold Pieces per vial</td>
                        </tr>
                        <tr>
                            <td><button onclick="addToCart('bomb-tn', 90)">Add to Cart</button></td>
                            <td onmouseenter="itemDetails(1)" onmouseout="removeDetails()">bomb</td>
                            <td>90 Gold Pieces per vial</td>
                        </tr>
                        <tr>
                            <td><button onclick="addToCart('catapult-tn', 120)">Add to Cart</button></td>
                            <td onmouseenter="itemDetails(2)" onmouseout="removeDetails()">catapult</td>
                            <td>120 Gold Pieces per pinch</td>
                        </tr>
                        <tr>
                            <td><button onclick="addToCart('helmet-tn', 120)">Add to Cart</button></td>
                            <td onmouseenter="itemDetails(3)" onmouseout="removeDetails()">helmet</td>
                            <td>120 Gold Pieces per vial</td>
                        </tr>
                        <tr>
                            <td><button onclick="addToCart('hole-tn', 200)">Add to Cart</button></td>
                            <td onmouseenter="itemDetails(4)" onmouseout="removeDetails()">hole</td>
                            <td>200 Gold Pieces per box</td>
                        </tr>
                        <tr>
                            <td><button onclick="addToCart('mallet-tn', 400)">Add to Cart</button></td>
                            <td onmouseenter="itemDetails(5)" onmouseout="removeDetails()">mallet</td>
                            <td>400 Gold Pieces per vial</td>
                        </tr>
                    </table>
                </section>
            </main>
    
            <footer>
            </footer>
        </div>
        <script src="script.js" type="text/javascript"></script>
</body>
</html>