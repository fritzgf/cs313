<?php
session_start();
?>
<!DOCTYPE html>
<html lang="eng">

<head meta charset="UTF-8">
    <meta name ="viewport" comment="width=device-width">
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>
<title></title>
<body>

   <h2>Shopping Cart</h2>
                    <ul>
                        <?php
                        $index = 0;
                        foreach ($_SESSION['cart'] as $item) {
                            echo "<li id='$index'><button onclick='removeFromCart($index, " . $_SESSION['price'][$index] . ")'>Remove from Cart</button> $item</li>";
                            $index++;
                        }
                        ?>
                    </ul>

                    <?php
                    $total = 0;
                    foreach ($_SESSION['price'] as $price) {
                        $total += $price;
                    }
                    echo "</p>Total: <span id='orderTotal'>" . $total . "</span> Gold Pieces";
                    ?>
                </section>
                
                <?php
                /*
                if (count($_SESSION['cart']) >= 1) {
                    echo "<p id='checkout-link'><a href='checkout.php'>Checkout</a></p>";
                } else {
                    echo "<p>You cannot check out with an empty cart</p>";
                }
                */
                ?>
                <p id='checkout-link'><a href='checkout.php'>Checkout</a></p>
            </main>

            <footer>
            </footer>
        </div>
        <script src="script.js" type="text/javascript"></script>

</body>
</html>