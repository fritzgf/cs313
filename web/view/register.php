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


    <form method="post" action="../accounts/index.php" class="form">

        <div class="register-page">
            <h1>Sign up</h1>

            <label for="firstName" > First Name </label> 
            <input type="text" placeholder="Joe" name="firstName" id="firstName" <?php if (isset($firstName)) { echo "value='$firstName'"; }?> required>
            

            <label for="lastName" > Last Name </label>
            <input  type="text"  placeholder="John" name="lastName"  id="lastName" <?php if (isset($lastName)) { echo "value='$lastName'"; }?> required> 
            

            <label for="email"> Email address </label>
            <input  type="email" name="email" id="email" required placeholder="Enter a valid email address" <?php if (isset($email)) { echo "value='$email'"; }?>>
       

            <label for="password" > Password </label>
            <input type="password"  name="password" id="password" required pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
   
            <br>
            <input type="submit" name="submit" id="regbtn" value="Register">
            <!-- Add the action name - value pair -->
            <input type="hidden" name="action" value="register">

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