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
    <title>Interview Questions</title>
</head>
<body>  
<div class="wrapper">

      <header class="page-header">

    <?php require("./../view/destroy.php"); ?> 

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
   <h1> All Questions</h1>
 <?php
      require("./../model/interviewq-model.php");  
  
?> 
    <br>
    <br>
  
</div>
</section>
  </main>

 <footer id="page-footer">
            <hr>
<?php require("./../common/footer.php");?>
</footer>
</body>
</html>
