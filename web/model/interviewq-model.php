<?php require("./../library/connections.php");

$db = get_db();


$query = "SELECT iq.id, iq.interviewtext, iq.date, iq.user_id, u.firstname FROM interview_questions as iq INNER JOIN users as u ON iq.user_id= u.id";
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
  echo "<a href='answers.php?interview_id=$id'>$interviewtext <br> $firstname  $date </a>";
 
  // echo "<li><a href='interviewq.php?user_id=$id'> $firstname </a></li>";
  // echo "<li><a href='interviewq.php?user_id=$id'> $date</a></li>";
}
echo "<hr>";
?>