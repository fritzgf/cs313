<?php
session_start();
/*
 * Accounts Controller
 */
//get the connection
require_once './../library/connections.php';
require_once './../model/accounts-model.php';
require_once './../library/function.php';


// if(isset ($_SESSION["loggedin"]) ==true){
        
//         $reviewClientId= $_SESSION['clientData']['clientId'];
//   $review_detail=getReviewsbyclientId($reviewClientId);
//   $reversed= array_reverse($review_detail);
// $displayReviewDetails =reviewWrap($reversed);}


switch ($action){
    
    case 'log':
        //Finally, destroy the session.
         session_destroy();
        setcookie('firstname', $firstName, strtotime('-1 year'), '/');
        
       header("Location:../view/interviewq.php");
   
    break;
   
    case 'viewadmin':
        
   
        include'../view/admin.php';
        break;
    
   case 'login':
       
   $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
   $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
   $email = checkEmail($email);
   $checkPassword = checkPassword($password);
   $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
   $email = checkEmail($email);
   $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
   
   //check password
   $passwordCheck = checkPassword($password);
   
   // Run basic checks, return if errors
   if (empty($email) || empty($passwordCheck)) {
     $message = '<p class="notice">Please provide a valid email address and password.</p>';
     include '../view/login.php';
     exit;
   }
   
   // A valid password exists, proceed with the login process
   // Query the client data based on the email address
   $data = getUser($email);
   // Compare the password just submitted against
   // the hashed password for the matching client
   $hashCheck = password_verify($password, $userData['password']);
   // If the hashes don't match create an error
   // and return to the login view
   if (!$hashCheck) {
     $message = '<p class="notice">Please check your password and try again.</p>';
     include '../view/login.php';
     exit;
   }
   // A valid user exists, log them in
   $_SESSION['loggedin'] = TRUE;
   // Remove the password from the array
   // the array_pop function removes the last
   // element from an array
   $_SESSION['userData'] = $userData;
   array_pop($userData);
   $firstName= $_SESSION['userData'] ['firstName'];
    setcookie('firstname', $firstName, strtotime('+1 year'), '/');
    
    $cookieFirstname = filter_input(INPUT_COOKIE, 'firstname', FILTER_SANITIZE_STRING);
    
   // Store the array into the session
   // Store the new data
   
  //  // Send them to the admin view
  //  include '../view/admin.php';
  //  header('Location: '.$_SERVER['REQUEST_URI']);
   
   
case 'registration':
include "./../view/register.php";
break;
case 'Register':
// Filter and store the data
$firstName = filter_input(INPUT_POST, 'firstName', FILTER_SANITIZE_STRING);
$lastName = filter_input(INPUT_POST, 'lastName', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

echo "firstName: $firstName\n";
echo "lastName: $lastName\n";
echo "email: $email\n";

// Check for missing data
if(empty($firstName) || empty($lastName) || empty($email) || empty($password)){
    $message = '<p>Please provide information for all empty form fields.</p>';
    include './../view/register.php';
    exit;
}
   // Hash the checked password
   $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
   
   // Send the data to the model
   $regOutcome = regUser($firstName, $lastName, $email, $hashedPassword);
   
   // Check and report the result
   if($regOutcome === 1){
   
     $message = "<p>Thanks for registering $firstName. Please use your email and password to login.</p>";
     include '../view/login.php';
     exit;
   } else {
     $message = "<p>Sorry $firstName, but the registration failed. Please try again.</p>";
     include '../view/register.php';
   }
   default:
       include '../view/admin.php'; 
      
   }
  