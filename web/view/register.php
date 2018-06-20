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
    <title>Register</title>
</head>
<body>
<div class="wrapper">

<header class="page-header">


    <!-- <?php require("./../common/header.php"); ?> -->

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


    <form method="post" action="./../accounts/insertReg.php" class="form">

        <div class="register-page">
            <h1>Sign up</h1>

           
            <input type="text" placeholder="First Name" name="firstName" id="firstName" <?php if (isset($firstName)) { echo "value='$firstName'"; }?> required>
            

           
            <input  type="text"  placeholder="Last Name" name="lastName"  id="lastname" <?php if (isset($lastName)) { echo "value='$lastName'"; }?> required> 
            

            <input  type="email" name="email" id="email" required placeholder="Enter a valid email address" <?php if (isset($email)) { echo "value='$email'"; }?>>
       

            <input type="password"  name="password" id="password" required pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"  placeholder="Must be at least 8 characters. e.g., Password#1">
   
            <br>
            <input type="submit" name="submit" id="regbtn" value="Register">
            <!-- Add the action name - value pair -->
            <input type="hidden" name="action" value="Register">

        </div>  



    </form> 

    </section>

</main>

<footer id="page-footer">
    <hr>
    <?php ?>
</footer>
</div>
</body>
</html>