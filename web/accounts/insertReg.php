 <?php
/* Accounts Controller
 * 
 */

// Create or access a Session
session_start();

require("./../library/connections.php");

$db = get_db();


$firstName = htmlspecialchars($_POST["firstName"]);
$lastName = htmlspecialchars($_POST["lastName"]);
$email = htmlspecialchars($_POST["email"]);
$password = htmlspecialchars($_POST["password"]);

if (!isset($firstName) || $firstName == ""
|| !isset($lastName) || $lastName == ""
    || !isset($email) || $email == ""
    || !isset($password) || $password == "")
{
	header("Location:../view/register.php");
	die(); // we always include a die after redirects.
}

$hash = password_hash($password, PASSWORD_DEFAULT);

// echo "firstName: $firstName\n";
// echo "lastName: $lastName\n";
// echo "email: $email\n";
// require("dbConnect.php");
$db = get_db();
$userData=regUser($firstName, $lastName, $email, $password);
function regUser($firstName, $lastName, $email, $password) {
  $db = get_db();
$query = "INSERT INTO users (firstName, lastName, email, password) VALUES (:firstName, :lastName, :email, :password)";

$statement = $db->prepare($query);
$statement->bindValue(":firstName", $firstName, PDO::PARAM_STR);
$statement->bindValue(":lastName", $lastName, PDO::PARAM_STR);
$statement->bindValue(":email", $email, PDO::PARAM_STR);
$statement->bindValue(":password", $hash, PDO::PARAM_STR);
$statement->execute();
// var_dump($statement);
// exit;
header("Location: ../view/login.php");
die();
}

?>  