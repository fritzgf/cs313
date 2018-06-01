<?php
/* Accounts Controller
 * 
 */

// Create or access a Session
session_start();

$firtstName = htmlspecialchars($_POST["firstName"]);
$lastName = htmlspecialchars($_POST["lastName"]);
$email = htmlspecialchars($_POST["email"]);
// echo "Course: $courseId\n";
// echo "date: $date\n";
// echo "content: $content\n";
// require("dbConnect.php");
// $db = get_db();

$query = "INSERT INTO users (firtsName, lastName, email) VALUES (:firstName, :lastName, :email)";
$statement = $db->prepare($query);
$statement->bindValue(":firstName", $firtstName, PDO::PARAM_STR);
$statement->bindValue(":lastName", $lastName, PDO::PARAM_STR);
$statement->bindValue(":email", $email, PDO::PARAM_STR);
$statement->execute();
header("Location: courseDetails.php?course_id=$courseId");
die();
?>