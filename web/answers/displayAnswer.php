<?php
session_start();



session_start();

require("./../library/connections.php");

$db = get_db();

$userId= $_SESSION ["userData"]["id"];
$interview_id= $_GET["interview_id"];


$query = "SELECT iq.id, interview_id, iq.answer, iq.date, iq.user_id, u.firstname FROM answers as iq INNER JOIN users as u ON iq.user_id= u.id";
$statement = $db->prepare($query);
// Bind any variables I need, here...
$statement->execute();
$rows = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($rows as $row) {
	$userId = $row["id"]; 
	$answer = $row["answer"];
   $firstname = $row["firstname"];
   $date = $row["date"]; 
   $interview_id = $row["interview_id"]; 
   
   echo "<hr>";
   echo "<li><a href='answers.php?interview_id=$id'>$interviewtext <br> $firstname - $date </a></li>";
  echo "<li>$answer <br> $firstname - $date </li>";
  echo "<hr>";

}
?>