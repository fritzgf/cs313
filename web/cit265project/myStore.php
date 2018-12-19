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
    <title>MyStore</title>
    <link href="style.css" rel="stylesheet" type="text/css" media ="screen"/>
</head>

<body>
    <div id="wrapper">
    <header class="page-header">

     <a href="viewCart.php">
    <img src="images/ShoppingCartLogo.png" alt="Shopping Cart logo" title=" logo for MyStore site"> </a>
            
           
        </header>

           <nav id="page-nav">
            <ul>
                <li><a id= "home_color" href="home.php" title="Go to home page">Home</a></li>
                <li><a id="eufy" href="eufy.html" title=""></a></li>
                <li><a id="huawei" href="huawei.html" title=""></a></li>
                <li><a id="china" href="china.html" title=""></a></li>
                <li><a id="august" href="august.html" title=" "></a></li>   
            </ul>

        </nav>

       
       <main class="page-main">
       <section id="home-content">
                
<section id="recipe-content">

<div id="recipe-images">

   
    <div id="image-wrapper">
    
            
                    <figure class="featured-image">
                    <img src='images/longImage.png' alt=''>
            <figcaption><button onclick="addToCart('Amazon Echo', 45)">Add to Cart</button>
                       <div  onmouseenter="itemDetails(0)" onmouseout="removeDetails()">Amazon Echo</div>
                        <p>Price: $70</p></figcaption>
                  </figure>
                       
                    <figure>
                    <img src='images/Huawei.png' alt=''>


                                <figcaption>
                                <button onclick="addToCart('Huawei Alexa', 60)">Add to Cart</button>
                        <div onmouseenter="itemDetails(1)" onmouseout="removeDetails()">Huawe Alexa</div>
                        <p>Price: $60</p>
                                </figcaption>
                                </figure>


                     <figure>
                     <img src='images/zoloImage.png' alt='Myth Black and White'>

                                <figcaption>
                                <button onclick="addToCart('Zolo Speaker', 50)">Add to Cart</button>
                        <div onmouseenter="itemDetails(2)" onmouseout="removeDetails()">China's Speaker</div>
                        <p> Price: $50</p>
                                </figcaption>
                            </figure>
        
                   
                    <figure>
                    <img src='images/augustVenus.png' alt=''>


                                <figcaption>
                                <button onclick="addToCart('August Venus Alexa', 200)">Add to Cart</button>
                        <div onmouseenter="itemDetails(4)" onmouseout="removeDetails()">August Venus Alexa</div>
                        <p>Price: $20</p>
                                </figcaption>
                            </figure>
        
                    <figure>
                    <img src='images/boxImage.png' alt=''>

                                <figcaption>
                            <button onclick="addToCart('China's Speaker, 50)">Add to Cart</button>
                        <div onmouseenter="itemDetails(4)" onmouseout="removeDetails()">China's Speaker</div>
                        <p>Price: $60</p>
                                </figcaption>
                            </figure>
                
                <figure>
                <img src='images/eufy.png' alt=''>


                            <figcaption>
                            <button onclick="addToCart('Eufy Speaker', 400)">Add to Cart</button>
                        <div onmouseenter="itemDetails(5)" onmouseout="removeDetails()">Eufy Speaker</div>
                        <p>Price: $45</p>
                                </figcaption>
                            </figure>

                </div>
                    </div>
                    



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
            <p> &copy; 2018 MyStore Inc., All rights reserved.</p>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="script.js" type="text/javascript"></script>
</div>
</body>

</html>