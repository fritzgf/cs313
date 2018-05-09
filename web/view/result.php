<!DOCTYPE html>
<html>

<head> </head>
<body>

<?php
// define variables and set to empty values
$name = $email = $major = $comment = $continnent = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $major = test_input($_POST["major"]);
  $comment = test_input($_POST["comment"]);
  $continnent = test_input($_POST["continnent"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<?php
echo "<h1>Result </h>";
echo"<br>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $major;
echo "<br>";
echo $comment;
echo "<br>";
echo $continnent;
?>
</body>
</html>