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
    <title>Ask Questions</title>
</head>
<body>
<div class="wrapper">

<header class="page-header">

</header>

<nav id="page-nav">
<?php

if(isset($_SESSION["userData"])){
    include '../view/logout.php';

}
?>


<?php require("./../common/nav.php");
 ?>
</nav>

<main class="page-main">
<section id="home-content">


 
<form action="#" method="post">

<label> Ask question </label> <br>
<input type="date" name="date"><br>
<textarea name="interviewtext" placeholder="interviewtext" rows="30" cols="50">  </textarea> <br>
<input type="hidden" name="user_id" value="<?php echo $links; ?>">
<input type="submit" value="Submit"> <br>
</form>
</div>
</section>
</main>

<footer id="page-footer">
      <hr>

      
<?php require("./../common/footer.php");?>
</footer>

    
</body>
</html>