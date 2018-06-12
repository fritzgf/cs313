<?php
require("./../library/connections.php");
$db = get_db();


$interviewtext = htmlspecialchars($_POST["interviewtext"]);
// echo "interview_id: $links\n";
// echo "date: $date\n";
// echo "interviewtext: $interviewtext\n";

$query = "INSERT INTO interview_questions (interviewtext) VALUES (:interviewtext)";
$statement = $db->prepare($query);

$statement->bindValue(":interviewtext", $interviewtext, PDO::PARAM_STR);


$statement->execute();
// echo" 1\n";
header("Location: ../view/answers.php");
die();
?>