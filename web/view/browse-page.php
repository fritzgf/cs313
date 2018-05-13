<!DOCTYPE html>
<html lang="eng">

<head meta charset="UTF-8">
    <meta name ="viewport" comment="width=device-width">
</head>
<title></title>
<body>

<h1>List of Products</h1>
<form method="post" action="view-cart.php" >
    <img src="/images/citadelle.jpg" class="image">
            <figcaption id="picture-name"> Price: $1.50 </figcaption>
            <div class="description"> 
            <?php
            function ViewItems(){
                require("./../view-cart.php");
            }
          ?>

<input type="button" name="addToCart" onclick="document.write('<?php viewItems() ?>');" value="Add to cart">
        </form>          
</body>
</html>