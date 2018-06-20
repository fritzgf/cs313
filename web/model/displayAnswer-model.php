<?php
require("./../library/connections.php");
$linksId = htmlspecialchars($_GET["interview_id"]);


$db = get_db();
$query = "SELECT iq.id, iq.interviewtext, iq.date, iq.user_id, u.firstname FROM interview_questions as iq INNER JOIN users as u ON iq.user_id= u.id WHERE iq.id=:id";
$statement = $db->prepare($query);
$statement->bindValue(":id", $linksId, PDO::PARAM_INT);
$statement->execute();
$row = $statement->fetch();
$interviewtext = $row["interviewtext"];
$firstname = $row["firstname"];
$date = $row["date"];

// echo "<hr>";
//   echo "<li>$interviewtext <br> $firstname - $date </li>";
//   echo "<hr>";
//   echo "<br>"

  ?>
  
  <?php
// call getInterviewq function


$userId= $_SESSION ["userData"]["id"];
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
   
   echo "<li>$interviewtext <br> $firstname - $date </li>";
   echo "<hr>";
  
  echo "<li><a href='answers.php?answer_id=$user_id'>$answer <br> $firstname - $date </a></li>";
  echo "<hr>";
}
?>
  