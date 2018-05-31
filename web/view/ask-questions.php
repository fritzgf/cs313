<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ask Questions</title>
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
require("./../model/interviewq-model.php");  
?>
<form action="interviewq.php" method="post">

<label> Ask questions </label> <br>
<input type="text" name="title" id="title"> 
<textarea rows="30" cols="50">  </textarea> <br>
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
