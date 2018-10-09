<?php
session_start();
if(!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
    $_SESSION['price'] = array();
}
?>

<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width">
    <title>Browse Items</title>
    <link href="style.css" rel="stylesheet" type="text/css" media ="screen"/>
</head>

<body>
    <div id="wrapper">
    <header class="page-header">
    <img src="/acme/images/site/logo.png" alt="Acme logo" title=" logo for acme site">
            
            <a href="viewCart.php">View Cart</a>
        </header>

           <nav id="page-nav">
            <ul>
                <li><a id= "home_color" href="home.php" title="Go to home page">Home</a></li>
                <li><a id="anvils" href="anvils.html" title="Acme's product"></a></li>
                <li><a id="explosive" href="explosives.html" title="Acme's product"></a></li>
                <li><a id="decoys" href="decoys.html" title="Acme's product"></a></li>
                <li><a id="traps" href="traps.html" title="Acme's product"></a></li>
                <li><a id="browse" href="viewCart.php" title="Browse Items"></a></li>
                
            </ul>

        </nav>

       
       <main class="page-main">
       <section id="home-content">
                
                <!-- <div class="description-item">
                <img id="pic" src="images/site/feature.jpg" alt="rocket acme strapped">

<ul id="rocket-item">
    <li>
        <h2>Acme Rocket</h2>
    </li>
    <li>Quick lighting fuse</li>
    <li>NHTSA approved seat belts</li>
    <li>Mobile launch stand included</li>
    <li><a href="#"><img id="actionbtn" alt="Add to cart button" src="/acme/images/site/iwantit.gif"></a></li>
</ul>
</div> -->
<section id="recipe-content">

<div id="recipe-images">

   
    <div id="image-wrapper">
    
                
         <!-- <div id="item-details">
                    
                </div>
                
                <table>
                    <tr> <figure> -->
                    <figure class="featured-image">
                    <img src='images/anvil.png' alt='Myth Black and White'>
            <figcaption><button onclick="addToCart('anvil', 50)">Add to Cart</button>
                       <div  onmouseenter="itemDetails(0)" onmouseout="removeDetails()">Potion of Healing</div>
                        <p>50 Gold Pieces per vial</p></figcaption>
                  </figure>
                        <!-- <td><button onclick="addToCart('anvil', 50)">Add to Cart</button></td>
                        <td onmouseenter="itemDetails(0)" onmouseout="removeDetails()">Potion of Healing</td>
                        <td>50 Gold Pieces per vial</td>
                    </tr> -->
                    <!-- <tr>
                        <button onclick="addToCart('bomb', 90)">Add to Cart</button></td>
                        <td onmouseenter="itemDetails(1)" onmouseout="removeDetails()">Philter of Love</td>
                        <td>90 Gold Pieces per vial</td>
                    </tr> -->
                    <figure>
                    <img src='images/anvil.png' alt='Myth Black and White'>


                                <figcaption>
                                <button onclick="addToCart('bomb', 90)">Add to Cart</button>
                        <div onmouseenter="itemDetails(1)" onmouseout="removeDetails()">Philter of Love</div>
                        <p>90 Gold Pieces per vial</p>
                                </figcaption>
                                </figure>
                    <!-- <tr>
                        <td><button onclick="addToCart('catapult', 120)">Add to Cart</button></td>
                        <td onmouseenter="itemDetails(2)" onmouseout="removeDetails()">Dust of Dryness</td>
                        <td>120 Gold Pieces per pinch</td>
                    </tr> -->

                     <figure>
                     <img src='images/anvil.png' alt='Myth Black and White'>

                                <figcaption>
                                <button onclick="addToCart('catapult', 120)">Add to Cart</button>
                        <div onmouseenter="itemDetails(2)" onmouseout="removeDetails()">Dust of Dryness</div>
                        <p>120 Gold Pieces per pinch</p>
                                </figcaption>
                            </figure>
                    <!-- <tr>
                        <td><button onclick="addToCart('helmet', 120)">Add to Cart</button></td>
                        <td onmouseenter="itemDetails(3)" onmouseout="removeDetails()">Elixir of Health</td>
                        <td>120 Gold Pieces per vial</td>
                    </tr> -->
                   
                    <figure>
                    <img src='images/anvil.png' alt='Myth Black and White'>


                                <figcaption>
                                <button onclick="addToCart('hole', 200)">Add to Cart</button>
                        <div onmouseenter="itemDetails(4)" onmouseout="removeDetails()">Marvelous Pigments</div>
                        <p>200 Gold Pieces per box</p>
                                </figcaption>
                            </figure>
                    <!-- <tr>
                        <td><button onclick="addToCart('hole', 200)">Add to Cart</button></td>
                        <td onmouseenter="itemDetails(4)" onmouseout="removeDetails()">Marvelous Pigments</td>
                        <td>200 Gold Pieces per box</td>
                    </tr> -->
                    <figure>
                    <img src='images/anvil.png' alt='Myth Black and White'>

                                <figcaption>
                            <button onclick="addToCart('hole', 200)">Add to Cart</button>
                        <div onmouseenter="itemDetails(4)" onmouseout="removeDetails()">Marvelous Pigments</div>
                        <p>200 Gold Pieces per box</p>
                                </figcaption>
                            </figure>
                    <!-- <tr>
                        <td><button onclick="addToCart('piano', 400)">Add to Cart</button></td>
                        <td onmouseenter="itemDetails(5)" onmouseout="removeDetails()">Sovereign Glue</td>
                        <td>400 Gold Pieces per vial</td>
                    </tr>
                </table> -->
                
                <figure>
                <img src='images/anvil.png' alt='Myth Black and White'>


                            <figcaption>
                            <button onclick="addToCart('piano', 400)">Add to Cart</button>
                        <div onmouseenter="itemDetails(5)" onmouseout="removeDetails()">Sovereign Glue</div>
                        <p>400 Gold Pieces per vial</p>
                                </figcaption>
                            </figure>

                </div>
                    </div>
                    <!-- <div id="product-review">

<h3>Acme Rocket Reviews</h3>
<ul>
    <li>"I don't know how I ever caught roadrunners before this." (9/10)</li>
    <li>"That thing was fast!" (4/5)</li>
    <li>"Talk about fast delivery." (5/5)</li>
    <li>"I didn't even have to pull the meat apart." (4.5/5)</li>
    <li>"I'm on my thirtieth one. I love these things!" (5/5)</li>
</ul>
</div> -->

</section>

</section>

<section id="product-content">

<div id="displayName"></div>
<div id="product-wrapper">

<div id="displayImage"> </div>

<ul id="description-position">

<li id="displayDescription"> </li>
<li id="displayManufacturer"></li>
<li id="displayReviews"></li>
<li id="displayPrice"></li>


</ul>
</div>
</section>
        </main>

       
       <footer id="page-footer">
            <hr>
            <p> &copy; 2017 ACME Inc., All rights reserved. <br> All images used are believed to be in "Fair Use". Please notify the author if any are not and they will be removed.</p>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="script.js" type="text/javascript"></script>
</div>
</body>

</html>