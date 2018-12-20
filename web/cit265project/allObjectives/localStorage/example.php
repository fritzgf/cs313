<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="img/favicon.png">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/storage.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>VIP list</title>
</head>
<body onload="getData()">
<div class="formFactor">
    <h1 >Objective 5</h1>
    <p >Please submit your info below</p>
       <h4>Fill out this form<span class="glyphicon glyphicon-heart"></span></h4>
        <form id="form">

                <input type="text" class="control" id="name" name="name" required maxlength="50" placeholder="Enter your full name ..."> <br>


                <input type="email" class="control" id="email" name="email" required maxlength="50" placeholder="Enter your valid email address ..."> <br>

            <button type="submit" class="clicker clicker-ready">Submit </button>
        </form>
    </div>
    <div class="form12">
        <div id="output">
        </div>
    </div>
</div>
<script src="jscripts/script.js"></script>
</body>
</html>