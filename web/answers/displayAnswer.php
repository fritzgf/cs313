<?php

$userId= $_SESSION ["userData"]["user_id"];
$interview_id= $_GET["userData"]["interview_id"];

$query = "SELECT iq.id, iq.answer, iq.date, iq.user_id, u.firstname FROM answers as iq INNER JOIN users as u ON iq.user_id= u.id";
$statement = $db->prepare($query);
// Bind any variables I need, here...
$statement->execute();
$rows = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($rows as $row) {
	$id = $row["id"]; 
	$interviewtext = $row["interviewtext"];
   $firstname = $row["firstname"];
   $date = $row["date"]; 
   
   echo "<hr>";
  echo "<li><a href='answers.php?interview_id=$id'>$interviewtext <br> $firstname - $date </a></li>";
  echo "<hr>";

}
?>