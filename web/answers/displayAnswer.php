<?php
session_start();

require("./../library/connections.php");

$db = get_db();

$userId= $_SESSION ["userData"]["id"];
$linksId =($_GET["interview_id"]);
// echo '$_SESSION["userData"]["id"]: $userId\n';
// echo "interview_id: $interview_id\n";
// exit;
if($linksId==NULL){
  $linksId = htmlspecialchars($_POST["interview_id"]);
  
}
$query = "SELECT iq.id, iq.interviewtext, iq.answer, iq.date, iq.user_id, u.firstname FROM answers as iq INNER JOIN users as u ON iq.user_id= u.id";
$statement = $db->prepare($query);
// Bind any variables I need, here...
$statement->execute();
$rows = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($rows as $row) {
	$userId = $row["id"]; 
	$answer = $row["answer"];
   $firstname = $row["firstname"];
   $date = $row["date"]; 
   $interviewtext = $row["interviewtext"]; 
   
   echo "<hr>";
   echo "$interviewtext <br> $firstname - $date </li>";
  echo "<li>$answer <br> $firstname - $date </li>";
  echo "<hr>";

}
?>