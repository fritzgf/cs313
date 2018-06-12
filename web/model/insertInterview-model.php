<?php
require("./../library/connections.php");
$db = get_db();


$interviewtext = htmlspecialchars($_POST["interviewtext"]);
// echo "interview_id: $links\n";
// echo "date: $date\n";
// echo "interviewtext: $interviewtext\n";
echo" 1\n";
$query = "INSERT INTO interview_questions (interviewtext) VALUES (:interviewtext)";
echo" 1\n";
$statement = $db->prepare($query);
echo" 1\n";
$statement->bindValue(":interviewtext", $interviewtext, PDO::PARAM_STR);

echo" 1\n";
$statement->execute();
echo" 1\n";
header("Location: ../view/answers.php");
die();
?>