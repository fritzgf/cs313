<!DOCTYPE html>
<html lang="eng">

<head meta charset="UTF-8">
    <meta name ="viewport" comment="width=device-width">
</head>
<title></title>
<body>

<h1>Enter a shipping address</h1>

<section>
<form method="post" action="" >

<span> <label>Full Name </label> </span>
    <input type="text" name="name"required>
    <span> <label> Address Line 1 </label> </span>
    <input type="text" name="address" required >
    <span> <label> City: </label> </span>
    <input type="text" name="city" required >
    <span> <label> State/Province/Region: </label> </span>
    <input type="text" name="state" required >
    <span> <label> Country </label> </span>
    <input type="text" name="country" required >
    <span> <label> Phone Number </label> </span>
    <input type="text" name="phone-number" required >

    <input type="submit" value="Use this address">
</form>
</section>
<section>
    <form method="post" action="view-cart.php">
    <input type="submit" value="return to shopping cart"> <br>
 
</form>
</section>

<section>
<form method="post" action="view-confirmation.php">
    <input type="submit" value="confirmation"> <br>
 
</form>
</section>
</body>
</html>