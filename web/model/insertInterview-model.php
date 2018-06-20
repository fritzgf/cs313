<?php
require("./../library/connections.php");
$db = get_db();


$interviewtext = htmlspecialchars($_POST["interviewtext"]);
$userId = htmlspecialchars($_POST["user_id"]);
$date = htmlspecialchars($_POST["date"]);
// echo "interview_id: $interviewId\n";
// echo "date: $date\n";
// echo "interviewtext: $interviewtext\n";
echo" 1\n";
$query = "INSERT INTO interview_questions (interviewtext, user_id, date) VALUES (:interviewtext, :user_id, :date)";
echo" 2\n";
$statement = $db->prepare($query);
echo" 3\n";
$statement->bindValue(":interviewtext", $interviewtext, PDO::PARAM_STR);
$statement->bindValue(":user_id", $userId, PDO::PARAM_INT);
$statement->bindValue(":date", $date, PDO::PARAM_STR);


echo" 4\n";
$statement->execute();
echo" 5\n";
header("Location: ../view/answers.php");
die();
?>