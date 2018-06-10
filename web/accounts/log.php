<?php
/* Accounts Controller
 * 
 */

// Create or access a Session
// session_start();

// require("./../library/connections.php");

// $db = get_db();

// $email = htmlspecialchars($_POST["email"]);
// $password = htmlspecialchars($_POST["password"]);

// $hash = password_hash($password, PASSWORD_DEFAULT);


// Run basic checks, return if errors
// if (empty($email) || empty($passwordCheck)) {
//     $message = '<p class="notice">Please provide a valid email address and password.</p>';
//     include '../view/login.php';
//     exit;
//   }

// // Check for an existing email address

 
//   $sql = 'SELECT email FROM users WHERE email = :email';
//   $stmt = $db->prepare($sql);
//   $stmt->bindValue(':email', $email, PDO::PARAM_STR);
//   $stmt->execute();
  
//   $matchEmail = $stmt->fetch(PDO::FETCH_NUM);
 
//   $stmt->closeCursor();
  
//   if(empty($email)){
//    return 0;
//      // echo 'Mached not found';
//      // exit;
//   } else {
//    return 1;
//      // echo 'Mached found'; 
//      // exit;
   
//   }

//   $sql = 'SELECT id, email FROM users WHERE email= :email AND password=:hash';
//   $stmt = $db->prepare($sql);
//   $stmt->bindValue(':email', $email, PDO::PARAM_STR);
//   $stmt->bindValue(':hash', $hash, PDO::PARAM_STR);
//   $stmt->execute();
//   $row = $stmt->fetch(PDO::FETCH_ASSOC);


  // header("Location: ../view/interviewq.php");
  //    die();
  $action = filter_input(INPUT_POST, 'action');
  if ($action == NULL) {
      $action = filter_input(INPUT_GET, 'action');
  }
  switch ($action) {
      case 'login':
          if (isset($_SESSION['userData'])) {
              //now get the character's associated with this user
              $regOutcome = regUser($_SESSION['userData']['email']);
              include "./../view/interviewq.php";
              exit;
          } else {
              include "./../view/login.php";
              exit;
          }
          break;
      case 'Login':
          // Filter and store the data
          $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
          $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
          // Check for missing data
          if (empty($firstName) || empty($password)) {
              $message = '<p>Both a username and password are required</p>';
              include "./../view/login.php";
              exit;
          }
          $userData = getUser($email);
          // Compare the password just submitted against the hashed password for the matching client
          $hashCheck = password_verify($password, $userData['password']);
          // If the hashes don't match create an error and return to the login view
          if (!$hashCheck) {
              $message = '<p>Please provide a valid username and password</p>';
              include './../view/login.php';
              exit;
          }
          // Remove the password from the array
          // the array_pop function removes the last element from an array
          array_pop($userData);
          // Store the array into the session
          $_SESSION['userData'] = $userData;
          //now get the character's associated with this user
          $regOutcome = regUser($_SESSION['userData']['email']);
          include "./../view/interviewq.php";
          break;
      case 'logout':
          session_destroy();
          header("Location: ./../view/interviewq.php");
          break;
      case 'register':
          include "./../view/register.php";
          break;
      case 'Register':
          // Filter and store the data
          $firstName = filter_input(INPUT_POST, 'firstName', FILTER_SANITIZE_STRING);
          $lastName = filter_input(INPUT_POST, 'lastName', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
          $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
          
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
              $message = "<p>Thanks for registering. Please use your username and password to login.</p>";
              include './../view/login.php';
              exit;
          } else {
              $message = "<p>Sorry, but the registration failed. Please try again.</p>";
              include './../view/register.php';
              exit;
          }
          break;
  
          default:
      include './../view/admin.php'; 
      }
  