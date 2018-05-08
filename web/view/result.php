<!DOCTYPE html>
<html>

<head> </head>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>
Your email address is: <?php echo $_POST["email"]; ?>
<?php
if(isset($_POST['submit'])){
$selected_val = $_POST['major'];  // Storing Selected Value In Variable
echo "You have selected :" .$selected_val;  // Displaying Selected Value
}
?>
</body>
</html>