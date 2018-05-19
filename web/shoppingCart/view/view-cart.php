<?php
session_start();
?>
<!DOCTYPE html>
<html lang="eng">

<head meta charset="UTF-8">
    <meta name ="viewport" comment="width=device-width">
</head>
<title></title>
<body>

<header> </header>


   <nav></nav>
<div class="container">
  <main> 
<h1>Shopping Cart</h1>
<ul> 
<?php
$index=0;
foreach($_SESSION['cart'] as $item){
echo"<li id='$index'> <button onclick='removeFromCart ($index. ". $_SESSION ['price']['$index'] . " )'> Remove From  Cart</button>$item</li>" ;
$index++;  }
?>
</ul>

<?php
$total=0;
foreach($_SESSION['price'] as $price){
  $total+= $price;

}
echo "<p> total: <span id= 'orderTotal'>" . $total . "</span>  Golden pieces";

?>

<p id="chekout-link"> <a href='./../view/checkout.php'> Checkout> Checkout </a> </p> 
</main>
</div>
<script src="script.js" type="text/javascript"></script>

</body>
</html>