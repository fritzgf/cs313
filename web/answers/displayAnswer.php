<?php
session_start();



session_start();

require("./../library/connections.php");

$db = get_db();

$userId= $_SESSION ["userData"]["user_id"];
$interview_id= $_GET["interview_id"];

$query = "SELECT iq.id, iq.answer, iq.date, iq.user_id, u.firstname FROM answers as iq INNER JOIN users as u ON iq.user_id= u.id";
$statement = $db->prepare($query);
// Bind any variables I need, here...
$statement->execute();
$rows = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($rows as $row) {
	$userId = $row["user_id"]; 
	$answer = $row["answer"];
   $firstname = $row["firstname"];
   $date = $row["date"]; 
   
   echo "<hr>";
  echo "<li><a href='answers.php?answer_id=$user_id'>$answer <br> $firstname - $date </a></li>";
  echo "<hr>";

}
?>