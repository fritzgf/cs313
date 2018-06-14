<?php
session_start();


require("./../library/connections.php");

$db = get_db();

// $userId= $_SESSION ["userData"]["user_id"];
// $interview_id= $_GET["userData"]["interview_id"];

$answer = htmlspecialchars($_POST["answer"]);
$userId = htmlspecialchars($_POST["user_id"]);
$interviewId = htmlspecialchars($_POST["interview_id"]);

echo "answer: $answer\n";
echo "user_id: $userId\n";
echo "interview_id: $interviewId\n";


$query = "INSERT INTO answers (answer, user_id, interview_id) VALUES (:answer, :user_id, :interview_id)";

$statement = $db->prepare($query);
$statement->bindValue(":answer", $answer, PDO::PARAM_STR);
$statement->bindValue(":user_id", $userId, PDO::PARAM_INT);
$statement->bindValue(":interview_id", $interviewId, PDO::PARAM_INT);
$statement->execute();
// var_dump($statement);
// exit;
header("Location: ../view/interviewq.php");
die();


?>