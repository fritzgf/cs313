<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width">
        <title>View Cart | MyStore</title>
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div id="container">
            <header>
                <h1>MyStore</h1>
                <a href="myStore.php">Browse Items</a>
            </header>

            <nav></nav>

            <main>
                <p></p>

                <section>
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
                    echo "</p>Total: <span id='orderTotal'>" . $total . "</span> Dollars";
                    ?>
                </section>
                
                <?php
               
                ?>
                <p id='checkout-link'><a href='checkout.php'>Checkout</a></p>
            </main>

            <footer>
            </footer>
        </div>
        <script src="script.js" type="text/javascript"></script>

    </body>
</html>