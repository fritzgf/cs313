<?php
require("./../library/connections.php");
$db = get_db();

$links = htmlspecialchars($_POST["user_id"]);
$date = htmlspecialchars($_POST["date"]);
$interviewtext = htmlspecialchars($_POST["interviewtext"]);
// echo "Course: $courseId\n";
// echo "date: $date\n";
// echo "content: $content\n";

$query = "INSERT INTO interview_questions (interviewtext, user_id, date) VALUES (:interviewtext, :user_id, :date)";
$statement = $db->prepare($query);
$statement->bindValue(":interviewtext", $interviewtext, PDO::PARAM_STR);
$statement->bindValue(":user_id", $links, PDO::PARAM_INT);
$statement->bindValue(":date", $date, PDO::PARAM_STR);
$statement->execute();
header("Location: ../view/interviewq.php?user_id=$links");
die();
?>