<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./../css/stylesheet.css" media="screen">
    <title>Login</title>
</head>
<body>
<div class="wrapper">

<header class="page-header">

    

</header>

<nav id="page-nav">

    <?php require("./../common/nav.php"); ?>
</nav>


            <main class="page-main">

<section id="home-content">
    <?php
    if (isset($message)) {
        echo $message;
    }
    ?>
    <form class="register-page" method="post" action="./../accounts/log.php">


        <div class="login-page">

            <h1>Sign in</h1>
            <input  type="email" name="email" id="email" required placeholder="Enter a valid email address" <?php
            if (isset($email)) {
                echo "value='$email'";
            }
            ?>>
            

            <input name= "password" type="password" placeholder="Enter Password" id="password" required pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"> 

          
            <input type="submit" name="submit" id="logbtn" value="Sign in"> 
            <input type="hidden" name="action" value="login">
            <span class="psw">Forgot password? <a href="#">send reset email</a></span>

            <p>  <a class="create-account" href="./../view/register.php">Create an account </a></p>

        </div>

    </form>

    </section>



</main>

<footer id="page-footer">
    <hr>
    <?php require("./../common/footer.php");?>
</footer>
</div>
</body>
</html>