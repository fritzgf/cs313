<?php
session_start();
/*
 * Accounts Controller
 */
//get the connection
require_once './../library/connections.php';
require_once './../model/accounts-model.php';


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
        
       header("Location:../view/reviewq.php");
   
    break;
   
    case 'viewadmin':
        
   
        include'../view/admin.php';
        break;
    
   case 'login':
       
   $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
   $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
   $mail = checkEmail($email);
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
   
   // Send them to the admin view
   include '../view/admin.php';
   header('Location: '.$_SERVER['REQUEST_URI']);
   
   
   exit; 
   
    //include '../view/login.php';
   //break;
   
//    case 'register':
//         include '../view/register.php';
   
//     break;
   
//      case 'Register':
//    // Filter and store the data
//      $firstName = filter_input(INPUT_POST, 'firstName', FILTER_SANITIZE_STRING);
//      $lastName = filter_input(INPUT_POST, 'lastName',FILTER_SANITIZE_STRING);
//      $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
//      $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
     
//    $email = checkEmail($email);
//    $checkPassword = checkPassword($password);
    
//    //Check for an existing email
//    $existingEmail = checkExistingEmail($email);
   
//    // Check for existing email address in the table
//    if($existingEmail){
//        if (isset($_COOKIE['reg'])) {
//      $message = '<p class="notice">That email address already exists. Do you want to login instead?</p>';
//      include '../view/login.php';
//      exit;
//        }
//      echo '<script> type="text/javascript">', 'location.reload();','</script>';
//    }
   
//    // Check for missing data
//    if(empty($firstName) || empty($lastName) || empty($email) || empty($checkPassword)){
//      $message = '<p>Please provide information for all empty form fields.</p>';
//      include '../view/register.php';
//      exit;
//    }
   
case 'register':
include "./../view/register.php";
break;
case 'Register':
// Filter and store the data
$firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
$lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

// Check for missing data
if(empty($firstname) || empty($lastname) || empty($email) || empty($password)){
    $message = '<p>Please provide information for all empty form fields.</p>';
    include './../view/register.php';
    exit;
}
   // Hash the checked password
   $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
   
   // Send the data to the model
   $regOutcome = regUser($firstname, $lastname, $email, $hashedPassword);
    
   
   
   // Check and report the result
   if($regOutcome === 1){
   
    
     $message = "<p>Thanks for registering $firstname. Please use your email and password to login.</p>";
     include '../view/login.php';
     exit;
   } else {
     $message = "<p>Sorry $firstname, but the registration failed. Please try again.</p>";
     include '../view/registration.php';
     //  Check if the firstname cookie exists, get its value
   if(isset($_COOKIE['firstname'])){
     $cookieFirstname = filter_input(INPUT_COOKIE, 'firstName', FILTER_SANITIZE_STRING);
   }
   $firstName= $_SESSION['userData'] ['firstName'];
    setcookie('firstname', $firstname, strtotime('+1 year'), '/');
    
    $cookieFirstname = filter_input(INPUT_COOKIE, 'firstName', FILTER_SANITIZE_STRING);
     exit;
     
   }
   //if($existingEmail){
   //    if (isset($_COOKIE['reg'])) {
   //        $message = "<p class='notice'>Thanks for registering $clientFirstname. Please use your email and password to login.</p>";
   //        include '../view/login.php';
   //    }
   //    $message = "<p class='notice'>That email already exists. Please use a different email.</p>";
   //    exit;
   //}
   //
   //echo '<script> type="text/javascript">', 'location.reload();','</script>';
   //
   //     break;
        
       //  case 'updateClient':
       //  $clientId = $_SESSION['clientData']['clientId'];
        
       //  $clientData = getClientId($clientId);
        
       // include '../view/client-update.php'; 
      
   break;
   
   default:
       include '../view/admin.php'; 
      
   }