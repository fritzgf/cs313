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
    <title>Your Answer</title>
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


<?php require("./../common/nav.php"); ?>
</nav>

<main class="page-main">
<section id="home-content">

<?php

require("./../model/displayAnswer-model.php");  


 ?> 
   <p>  <a class="ask-question" href="./../view/ask-question.php">Ask Question </a></p>

<form action="./../answers/yourAnswer.php" method="post">

<label> Share your Answer </label> <br>
<textarea name="answer" placeholder="Type your answer" rows="30" cols="50">  </textarea> <br>
<input type="hidden" name="interview_id" value="<?php echo $linksId; ?>">
<input type="hidden" name="user_id" value="<?php echo $_SESSION["userData"]; ?>">
 <?php 
 echo 'i am here';
  var_dump($_SESSION['userData']);
 
 ?> 

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
