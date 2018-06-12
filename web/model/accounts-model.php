<?php

function regUser($firstName, $lastName, $email, $password) {
   $db = get_db();
   
$query = "INSERT INTO users (firstName, lastName, email, password) VALUES (:firstName, :lastName, :email, :password)";

$statement = $db->prepare($query);
$statement->bindValue(":firstName", $firstName, PDO::PARAM_STR);
$statement->bindValue(":lastName", $lastName, PDO::PARAM_STR);
$statement->bindValue(":email", $email, PDO::PARAM_STR);
$statement->bindValue(":password", $password, PDO::PARAM_STR);

// Insert the data
$statement->execute();  
// Ask how many rows changed as a result of our insert
    $rowsChanged = $statement->rowCount();
   
// Close the database interaction
 $statement-->closeCursor();
   // Return the indication of success (rows changed)
      return $rowsChanged;
 }
 function getUser($email){ 
   $db = get_db();
   $query = 'SELECT id, email FROM users WHERE email= :email';
   $statement = $db->prepare($query);
     $statement->bindValue(':password', $password, PDO::PARAM_STR);
   $statement->execute();
   $userData = $statement->fetch(PDO::FETCH_ASSOC);
     
    // Close the database interaction
    $statement->closeCursor();
        
    // Return the result
    return $userData;  
}

 // Check for an existing email address
 function checkExistingEmail($email){
 $db = get_db();
 $query = 'SELECT email FROM users WHERE email = :email';
 $statement = $db->prepare($query);
 $statement->bindValue(':email', $email, PDO::PARAM_STR);
 $statement->execute();
 $matchEmail = $statement->fetch(PDO::FETCH_NUM);
 $statement->closeCursor();
 
 if(empty($email)){
  return 0;
    // echo 'Mached not found';
    // exit;
 } else {
  return 1;
    // echo 'Mached found'; 
    // exit;
  
 }
 }
