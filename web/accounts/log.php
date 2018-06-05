<?php
/* Accounts Controller
 * 
 */

// Create or access a Session
session_start();
echo '1\n';
require("./../library/connections.php");

$db = get_db();

$email = htmlspecialchars($_POST["email"]);
$password = htmlspecialchars($_POST["password"]);
// Run basic checks, return if errors
// if (empty($email) || empty($passwordCheck)) {
//     $message = '<p class="notice">Please provide a valid email address and password.</p>';
//     include '../view/login.php';
//     exit;
//   }

// Check for an existing email address

 
  $sql = 'SELECT email FROM users WHERE email = :email';
  $stmt = $db->prepare($sql);
  $stmt->bindValue(':email', $email, PDO::PARAM_STR);
  $stmt->execute();
  echo '2\n';
  $matchEmail = $stmt->fetch(PDO::FETCH_NUM);
  $stmt->closeCursor();
  if(empty($email)){
   return 0;
     // echo 'Mached not found';
     // exit;
  } else {
   return 1;
     // echo 'Mached found'; 
     // exit;
   
  }
  $sql = 'SELECT user_id, fistname, lastname, email, password FROM users WHERE email= :email';
  $stmt = $db->prepare($sql);
  $stmt->bindValue(':email', email, PDO::PARAM_STR);
  $stmt->execute();
  echo '3\n';
  $rows = $stmt->fetch(PDO::FETCH_ASSOC);
  header("Location: ../view/interviewq.php");
     die();
?>