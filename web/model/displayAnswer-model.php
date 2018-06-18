<?php
require("./../library/connections.php");
$linksId = htmlspecialchars($_POST["interview_id"]);
$db = get_db();
$query = "SELECT iq.id, iq.interviewtext, iq.date, iq.user_id, u.firstname FROM interview_questions as iq INNER JOIN users as u ON iq.user_id= u.id WHERE iq.id=:id";
$statement = $db->prepare($query);
$statement->bindValue(":id", $linksId, PDO::PARAM_INT);
$statement->execute();
$row = $statement->fetch();
$interviewtext = $row["interviewtext"];
$firstname = $row["firstname"];
$date = $row["date"];
echo "<hr>";
  echo "<li>$interviewtext <br> $firstname - $date </li>";
  echo "<hr>";
  echo "<br>"
?>  