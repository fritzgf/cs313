<?php
require("./../library/connections.php");
$db = get_db();

$links = htmlspecialchars($_POST["interview_id"]);
$date = htmlspecialchars($_POST["date"]);
$interviewtext = htmlspecialchars($_POST["interviewtext"]);
echo "interview_id: $links\n";
echo "date: $date\n";
echo "interviewtext: $interviewtext\n";

$query = "INSERT INTO interview_questions (interviewtext, interview_id, date) VALUES (:interviewtext, :interview_id, :date)";
$statement = $db->prepare($query);
$statement->bindValue(":interviewtext", $interviewtext, PDO::PARAM_STR);
$statement->bindValue(":interview_id", $links, PDO::PARAM_INT);
$statement->bindValue(":date", $date, PDO::PARAM_STR);
$statement->execute();
header("Location: ../view/answers.php?interview_id=$links");
die();
?>