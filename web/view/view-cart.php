<!DOCTYPE html>
<html lang="eng">

<head meta charset="UTF-8">
    <meta name ="viewport" comment="width=device-width">
</head>
<title></title>
<body>

<h1>Please see your items selected</h1>
<?php
// define variables and set to empty values
$image = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $image = test_input($_POST["image"]);

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
echo $image;
echo "<br>";

?>
</body>
</html>