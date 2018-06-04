<?php
/* Accounts Controller
 * 
 */

// Create or access a Session
session_start();

require("./../library/connections.php");

$db = get_db();

// Check for an existing email address

 
  $sql = 'SELECT email FROM users WHERE email = :email';
  $stmt = $db->prepare($sql);
  $stmt->bindValue(':email', $email, PDO::PARAM_STR);
  $stmt->execute();
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
     header("Location: ../view/answers.php");
     die();
  }

?>