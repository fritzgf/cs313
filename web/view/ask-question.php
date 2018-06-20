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



<?php require("./../common/nav.php");
 ?>
</nav>

<main class="page-main">
<section id="home-content">

<div class="login-page">
 
<form action="./../model/insertInterview-model.php" method="post" class="register-page" >
<div class="login-page">
<label> Ask question </label> <br>
<input value="2018-06-14" name="date" type="input" class="form-control" placeholder="YYYY-MM-DD"/><br> <br>
<textarea name="interviewtext" placeholder="interviewtext" rows="30" cols="50">  </textarea> <br>
<input type="hidden" name="user_id" value="<?php echo $_SESSION["userData"]["id"]; ?>">


<input type="submit" value="Submit" class="quesButton"> 
</div>
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