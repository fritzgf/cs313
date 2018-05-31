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

<?php 

 ?>

</header>

<nav id="page-nav">

<?php require("./../common/nav.php"); ?>
</nav>

 <main class="page-main">
 <section id="home-content">
 <?php
      require("./../model/interview_m.php");  
    ?>
     <form action="interviewq.php" method="post">

     <label> Ask question </label> <br>
     <input type="text" name="title" id="title"> 
      <textarea rows="30" cols="50">  </textarea> <br>
      <input type="submit" value="submit"> <br>
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
