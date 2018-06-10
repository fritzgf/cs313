<?php
if (isset($_SESSION['loggedin']) != TRUE) {
    header("Location: /acme/index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

   <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./../css/stylesheet.css" media="screen">
    <title>Register</title>
</head>
<body>

    <body>

        <div class="wrapper">

            <header class="page-header">


                <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/header.php'; ?>



            </header>



            <nav id="page-nav">

               <?php require("./../common/nav.php"); ?>
            </nav>


            <main class="page-main">

                <section id="home-content">
                    <h1> <?php echo $_SESSION['clientData']['clientFirstname'] . " " . $_SESSION['clientData']['clientLastname']; ?> </h1> 

                    <?php
                    if (isset($_SESSION['loggedin']) == TRUE) {
                        echo' You are logged in';
                    }
                    ?>
                    <ul> 
                        <li> First Name: <?php echo $_SESSION['clientData']['clientFirstname']; ?></li>
                        <li> Last Name : <?php echo $_SESSION['clientData']['clientLastname']; ?> </li>
                        <li> Email : <?php echo $_SESSION['clientData']['clientEmail']; ?></li>


                    </ul>
                    <a class="account-link" href="/acme/accounts/?action=updateClient"> Update Your account</a>

                    <div>  

                        <?php
                        if ($_SESSION['clientData']['clientLevel'] > 1) {
                            echo'<h1> Administration Functions </h1>
                        <p> Please use the link below to manage Projects</p>';

                            echo '<a class="Product-link" href="/acme/products/"> Product </a>';
                        }
                        ?>
                    </div>
                <?php
                 echo $displayReviewDetails;

                  ?>
                </section>



            </main>

            <footer id="page-footer">
                <hr>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php'; ?>
            </footer>

        </div>
    </body>
</html>

