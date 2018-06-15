<?php
session_start();


require("./../library/connections.php");

$db = get_db();

// $userId= $_SESSION ["userData"]["user_id"];
// $interview_id= $_GET["userData"]["interview_id"];

$answer = htmlspecialchars($_POST["answer"]);
$userId = htmlspecialchars($_POST["user_id"]);
$interviewId = htmlspecialchars($_POST["interview_id"]);
$date = htmlspecialchars($_POST["date"]);

// echo "answer: $answer\n";
// echo "user_id: $userId\n";
// echo "interview_id: $interviewId\n";
// echo "date: $date\n";

// insert data to the database

$query = "INSERT INTO answers (answer, user_id, interview_id, date) VALUES (:answer, :user_id, :interview_id, :date)";

$statement = $db->prepare($query);
$statement->bindValue(":answer", $answer, PDO::PARAM_STR);
$statement->bindValue(":user_id", $userId, PDO::PARAM_INT);
$statement->bindValue(":interview_id", $interviewId, PDO::PARAM_INT);
$statement->bindValue(":date", $date, PDO::PARAM_STR);
// try{
$statement->execute();
echo'success';
// } catch(PDOException $e){ 
// echo $e->getMessage();
// exit;
// }
// var_dump($statement);
// exit;
header("Location: ../view/interviewq.php");
die();


?>