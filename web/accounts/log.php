<?php
/* Accounts Controller
 * 
 */

//Create or access a Session
session_start();

require("./../library/connections.php");


$db = get_db();

$email = htmlspecialchars($_POST["email"]);
$password = htmlspecialchars($_POST["password"]);

//Run basic checks, return if errors
if (empty($email) || empty($password)) {
  $message = '<p class="notice">Please provide a valid email address and password.</p>';
  include '../view/login.php';
  exit;
}

// get the user data from the database to verify 
$sql = 'SELECT id, email, password FROM users WHERE email= :email';
$stmt = $db->prepare($sql);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->execute();
$userData = $stmt->fetch(PDO::FETCH_ASSOC);
var_dump($userData);
exit;
$hash = password_verify($password, $userData['password']);

// Check for an existing email address
 
if(!$hash){
  $message='<p>  Please Provide valid credentials</p>';
  include '../view/login.php';
  exit;
}
// remove the old password
array_pop($userData);

$_SESSION['userData']= $userData;
header("Location: ../view/interviewq.php");

  // $sql = 'SELECT id, email FROM users WHERE email= :email AND password=:hash';
  // $stmt = $db->prepare($sql);
  // $stmt->bindValue(':email', $email, PDO::PARAM_STR);
  // $stmt->bindValue(':hash', $hash, PDO::PARAM_STR);
  // $stmt->execute();
  // $row = $stmt->fetch(PDO::FETCH_ASSOC);
?>
