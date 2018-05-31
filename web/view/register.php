<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
<div class="wrapper">

<header class="page-header">


    <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/header.php'; ?>



</header>

<nav id="page-nav">

    <?php echo $navList; ?>
</nav>


<main class="page-main">

    <section id="home-content">

        <?php
        if (isset($message)) {
            echo $message;
        }
        ?>


        <form method="post" action="login.php" class="form">

            <div class="register-page"> 
                <h1>Sign up</h1>

                <label for="clientFirstname" > First Name </label> 
                <input type="text" placeholder="Joe" name="clientFirstname" id="clientFirstname" <?php if (isset($clientFirstname)) { echo "value='$clientFirstname'"; }?> required>
                

                <label for="clientLastname" > Last Name </label>
                <input  type="text"  placeholder="John" name="clientLastname"  id="clientLastname" <?php if (isset($clientLastname)) { echo "value='$clientLastname'"; }?> required> 
                

                <label for="clientEmail"> Email address </label>
                <input  type="email" name="clientEmail" id="clientEmail" required placeholder="Enter a valid email address" <?php if (isset($clientEmail)) { echo "value='$clientEmail'"; }?>>
           

                <label for="clientPassword" > Password </label>
                <input type="password"  name="clientPassword" id="clientPassword" required pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
       
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