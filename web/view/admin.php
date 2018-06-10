<?php
if (isset($_SESSION['loggedin']) != TRUE) {
    header("Location: ../view/login.php");
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


               



            </header>



            <nav id="page-nav">

               <?php require("./../common/nav.php"); ?>
            </nav>


            <main class="page-main">

                <section id="home-content">
                    <h1> <?php echo $_SESSION['userData']['firstName'] . " " . $_SESSION['userData']['lastName']; ?> </h1> 

                    <?php
                    if (isset($_SESSION['loggedin']) == TRUE) {
                        echo' You are logged in';
                    }
                    ?>
                    <ul> 
                        <li> First Name: <?php echo $_SESSION['userData']['firstName']; ?></li>
                        <li> Last Name : <?php echo $_SESSION['userData']['lastName']; ?> </li>
                        <li> Email : <?php echo $_SESSION['userData']['email']; ?></li>


                    </ul>
            
                </section>



            </main>

            <footer id="page-footer">
                <hr>
                
            </footer>

        </div>
    </body>
</html>

