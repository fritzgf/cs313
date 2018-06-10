<?php

function regUser($firstName, $lastName, $email, $password) {
   $db = get_db();
   
$query = "INSERT INTO users (firstName, lastName, email, password) VALUES (:firstName, :lastName, :email, :password)";

$statement = $db->prepare($query);
$statement->bindValue(":firstName", $firstName, PDO::PARAM_STR);
$statement->bindValue(":lastName", $lastName, PDO::PARAM_STR);
$statement->bindValue(":email", $email, PDO::PARAM_STR);
$statement->bindValue(":password", $hash, PDO::PARAM_STR);
// Insert the data
$statement->execute();  
// Ask how many rows changed as a result of our insert
    $rowsChanged = $stmt->rowCount();
   
// Close the database interaction
 $statement-->closeCursor();
   // Return the indication of success (rows changed)
      return $rowsChanged;
 }
 function getUser($email){ 
   $db = get_db();
   $query = 'SELECT id, email FROM users WHERE email= :email';
   $statement = $db->prepare($query);
   $statement->bindValue(':email', $email, PDO::PARAM_STR);
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


















// // Get client data based on a screenName
// function getUser($screenName) {
    		
//     // Create a connection object using the acme connection function
//     $db = get_db();
//     // The SQL statement to be used with the database
//     $sql = 'SELECT userId, screenName, Email, Password '
//             . ' FROM Users WHERE screenName = :ScreenName';
//     // Create the prepared statement using the acme connection
//     $stmt = $db->prepare($sql);
	
//     $stmt->bindValue(':ScreenName', $screenName, PDO::PARAM_STR);
//     $stmt->execute();
//     $userData = $stmt->fetch(PDO::FETCH_ASSOC);
        
//     // Close the database interaction
//     $stmt->closeCursor();
        
//     // Return the result
//     return $userData;  
// }
// function regUser($screenName, $email, $password) {
// // Create a connection object using the acme connection function
//    $db = herokuConnect();
   
// // The SQL statement
//    $sql = 'INSERT INTO users (screenname, email, password) VALUES (:screenName, :email, :password)';
   
// // Create the prepared statement using the acme connection
//    $stmt = $db->prepare($sql);
   
//    $stmt->bindValue(':screenName', $screenName, PDO::PARAM_STR);
//    $stmt->bindValue(':email', $email, PDO::PARAM_STR);
//    $stmt->bindValue(':password', $password, PDO::PARAM_STR);
   
// // Insert the data
//    $stmt->execute();
   
// // Ask how many rows changed as a result of our insert
//    $rowsChanged = $stmt->rowCount();
   
// // Close the database interaction
//    $stmt->closeCursor();
   
// // Return the indication of success (rows changed)
//    return $rowsChanged;
// }
//check for already existing email addresses
function checkExistingUsers($screenName) {
    // Create a connection object using the acme connection function
    $db = herokuConnect();
    
    // The SQL statement to be used with the database
    $sql = 'SELECT screenname FROM users WHERE screenname = :screenName';
    
    // Create the prepared statement using the acme connection
    $stmt = $db->prepare($sql);
    
    $stmt->bindValue(':screenName', $screenName, PDO::PARAM_STR);
    $stmt->execute();
    $matchName = $stmt->fetch(PDO::FETCH_NUM);
    
    // Close the database interaction
    $stmt->closeCursor();
    
    // Return the result
    if(empty($matchName)) {
        return 0;
    } else {
        return 1;
    }
}