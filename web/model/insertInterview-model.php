<?php
require("./../library/connections.php");
$db = get_db();

$links = htmlspecialchars($_POST["user_id"]);
$date = htmlspecialchars($_POST["date"]);
$interviewtext = htmlspecialchars($_POST["interviewtext"]);
// echo "Course: $courseId\n";
// echo "date: $date\n";
// echo "content: $content\n";

$query = "INSERT INTO note (course_id, content, date) VALUES (:courseId, :content, :date)";
$statement = $db->prepare($query);
$statement->bindValue(":courseId", $courseId, PDO::PARAM_INT);
$statement->bindValue(":content", $content, PDO::PARAM_STR);
$statement->bindValue(":date", $date, PDO::PARAM_STR);
$statement->execute();
header("Location: courseDetails.php?course_id=$courseId");
die();
?>