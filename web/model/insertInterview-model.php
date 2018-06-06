<?php
require("./../library/connections.php");
$db = get_db();

$links = htmlspecialchars($_POST["id"]);

$interviewtext = htmlspecialchars($_POST["interviewtext"]);
// echo "interview_id: $links\n";
// echo "date: $date\n";
// echo "interviewtext: $interviewtext\n";

$query = "INSERT INTO interview_questions (interviewtext, id) VALUES (:interviewtext, :id)";
$statement = $db->prepare($query);

$statement->bindValue(":interviewtext", $interviewtext, PDO::PARAM_STR);
$statement->bindValue(":id", $links, PDO::PARAM_INT);
echo" 1\n";
$statement->execute();

header("Location: ../view/answers.php?interview_id=$links");
die();
?>