<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
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
        
        <form class="logForm" method="post" action="interviewp.php">


            <div class="login-page">

                <h1 id="signIn">Sign in</h1>
                <input  type="email" name="clientEmail" id="clientEmail" required placeholder="Enter a valid email address" <?php
                if (isset($clientEmail)) {
                    echo "value='$clientEmail'";
                }
                ?>>
                

                <input name= "clientPassword" type="password" placeholder="Enter Password" id="clientPassword" required pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"> 

              
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
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php'; ?>
</footer>
</div>
</body>
</html>